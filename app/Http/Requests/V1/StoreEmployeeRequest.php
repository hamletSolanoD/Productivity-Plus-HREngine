<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;

use App\Http\Resources\V1\EmployeeResource;
use App\Http\Resources\V1\EmployeeCollection;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_uuid' => ['required'],
            'firstname' => ['required'],
            'paternalsurname' => ['required'],
            'gender' => ['required', Rule::in(['m', 'f'])],
            'birthdate' => ['required', 'date_format:Y-m-d'],
            'curp' => ['required', 'unique:employees,curp'],
            //'employer_id' => ,
            //'employer_uuid' => , 
            //'maternalsurname' => ,
            //'phone' => ,
            'email' => ['email', 'unique:users,email'],
            //'birthstate' =>sp cs
            'maritalstatus' => [Rule::in(['s', 'm'])],
            'matrimonialregime' => ['required_if:maritalstatus,=,m', 'prohibited_if:maritalstatus,=,s', Rule::in(['sp', 'cs'])],
            //'rfc' => ,
            //'nss' => ,
            'fonacot' => [Rule::in([true, false])],
            'fonacot_total' => ['required_if:fonacot,=,true', 'prohibited_if:fonacot,=,false'],
            'fonacot_discount' => ['required_if:fonacot,=,true', 'prohibited_if:fonacot,=,false'],
            'infonavit' => [Rule::in([true, false])],
            'infonavit_creditnumber' => ['required_if:infonavit,=,true', 'prohibited_if:infonavit,=,false'],
            'infonavit_discount' => ['required_if:infonavit,=,true', 'prohibited_if:infonavit,=,false'],
            'infonavit_factor' => ['required_if:infonavit,=,true', 'prohibited_if:infonavit,=,false'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {        
        $numerics = (object) [];
        if(!is_numeric($this->fonacot_total)){
            $numerics->fonacot_total = ["The fonacot total must be a number."];
        }
        if(!is_numeric($this->fonacot_discount)){
            $numerics->fonacot_discount = ["The fonacot discount must be a number."];
        }
        if(!is_numeric($this->infonavit_discount)){
            $numerics->infonavit_discount = ["The infonavit discount must be a number."];
        }
        if((array)$numerics){
            throw new HttpResponseException(response()->json($numerics, 406));
        }
        $employer = Employer::where('uuid', $this->employer_uuid)->first();
        if(empty($employer) && !empty($this->employer_uuid)){
            throw new HttpResponseException(response("Employer uuid dosent exist", 428));
        }
        $employer_id = !empty($employer) ? $employer->id : null;
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if(empty($session_user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($session_user['type'] == "e"){
            throw new HttpResponseException(response("Session user does not have privileges", 401));
        }
        $uuid = Str::uuid()->toString();
        $this->merge([
            'uuid' => $uuid,
            'employer_id' => $employer_id
        ]);
        new EmployeeResource(Employee::create(request()->all()));
        throw new HttpResponseException(response($uuid, 200));
    }
}
