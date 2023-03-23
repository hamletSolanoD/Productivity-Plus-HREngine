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

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'active' => ['sometimes', 'required', Rule::in([true, false])],
            'type' => ['sometimes', 'required', Rule::in(['e', 'b', 'a'])],
            'employee_uuid' => ['sometimes', 'required_if:type,=,e', 'size:36'],
            'employer_uuid' => ['sometimes', 'required_if:type,=,r', 'size:36'],
            'name' => ['sometimes', 'required'],
            'uuid' => ['sometimes', 'required', 'size:36'],
            'email' => ['sometimes', 'required', 'email', 'unique:users,email'],
            'password' => [
                'sometimes', 'required',
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
        if($this->type == "e" && !empty($this->employee_uuid)){
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if(empty($employee)){
                throw new HttpResponseException(response("employee uuid dosent exist", 428));
            }
            $employee_id = $employee->id;
        }
        if($this->type == "b" && !empty($this->employer_uuid)){
            $employer = Employer::where('uuid', $this->employer_uuid)->first();
            if(empty($employer)){
                throw new HttpResponseException(response("employer uuid dosent exist", 428));
            }
            $employer_id = $employer->id;
        }
        $this->merge([
            'employee_id' => $employee_id,
            'employer_id' => $employer_id,
            'password' => Hash::make($this->password)
        ]);
    }
}
