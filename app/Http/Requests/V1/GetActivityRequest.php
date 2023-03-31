<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employer;
use App\Models\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class GetActivityRequest extends FormRequest
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
            'employer_uuid' => ['sometimes', 'required'],
            'employee_uuid' => ['sometimes', 'required'],
            'user_uuid' => ['required']
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $user = User::where('uuid', $this->user_uuid)->first();
        if(empty($user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($user['type'] != "b"){
            throw new HttpResponseException(response("Session user does not have privileges ", 401));
        }
        if(empty($this->employer_uuid) && empty($this->employee_uuid)){
            throw new HttpResponseException(response("The employer uuid or employee uuid field is required", 406));
        }
        if(!empty($this->employer_uuid)){
            $employer = Employer::where('uuid', $this->employer_uuid)->first();
            if(empty($employer)){
                throw new HttpResponseException(response("Employer uuid dosent exist", 428));
            }
        }
        if(!empty($this->employee_uuid)){
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if(empty($employee)){
                throw new HttpResponseException(response("Employee uuid dosent exist", 428));
            }
        }
    }
}
