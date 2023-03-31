<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;
use App\Http\Resources\V1\EmployerCollection;
use App\Http\Resources\V1\EmployerResource;

class UpdateEmployerRequest extends FormRequest
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
            'active' => ['sometimes', 'required', Rule::in([true, false])],
            'outsource' => ['sometimes', 'required_if:persontype,=,m', 'prohibited_if:persontype,=,f', Rule::in([true, false])],
            'rfc' => ['sometimes', 'required'],
            'employerregistry' => ['sometimes', 'required'],
            'persontype'=> ['sometimes', 'required', Rule::in(['m', 'f'])],
            'outsourceat' => ['sometimes', 'required_if:outsource,=,true', 'prohibited_if:persontype,=,f'],
            'tradename' => ['sometimes', 'required', 'unique:employers,tradename'],
            'businessname' => ['sometimes', 'required_if:persontype,=,m', 'prohibited_if:persontype,=,f'],            
            'firstname' => ['sometimes', 'required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'paternalsurname' => ['sometimes', 'required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'maternalsurname' => ['sometimes', 'required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'gender' => ['sometimes', 'required_if:persontype,=,f', 'prohibited_if:persontype,=,m', Rule::in(['m', 'f'])],
            'birthdate' => ['sometimes', 'required_if:persontype,=,f', 'prohibited_if:persontype,=,m', 'date_format:Y-m-d'],
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $uuid = request('employer');
        $employer = Employer::where('uuid', $uuid)->first();
        if(empty($employer)){
            throw new HttpResponseException(response("Employer uuid dosent exist", 428));
        }
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if(empty($session_user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($session_user['type'] != "a"){
            throw new HttpResponseException(response("Session user does not have privileges", 401));
        }
        $employer->update(request()->all());
        $employer->table = "employer";
        BinnacleController::Log($employer, 'u', $session_user);
        throw new HttpResponseException(response("updated employer", 200));
    }
}
