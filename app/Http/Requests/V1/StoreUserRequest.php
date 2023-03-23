<?php

namespace App\Http\Requests\V1;

use App\Models\Employee;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;

class StoreUserRequest extends FormRequest
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
            'active' => 'required', Rule::in([true, false]),
            'type' => ['required', Rule::in(['e', 'b', 'a'])],
            //'employee_id' => 'required_if:type,=,e|integer',
            'employee_uuid' => 'required_if:type,=,e|size:36',
            'employer_uuid' => 'required_if:type,=,b|size:36',
            'name' => 'required',
            //'uuid' => 'required|size:36|unique:users,uuid',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $employee_id = null;
        $employer_id = null;
        if($this->type == "e"){
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if(empty($employee)){
                throw new HttpResponseException(response("employee uuid dosent exist", 428));
            }
            $employee_id = $employee->id;
        }
        if($this->type == "b"){
            $employer = Employer::where('uuid', $this->employer_uuid)->first();
            if(empty($employer)){
                throw new HttpResponseException(response("employer uuid dosent exist", 428));
            }
            $employer_id = $employer->id;
        }
        $this->merge([
            'uuid' => Str::uuid()->toString(),
            'employee_id' => $employee_id,
            'employer_id' => $employer_id,
            'password' => Hash::make($this->password)
        ]);
    }
}
