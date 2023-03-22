<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Employee;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class GetEmployeeActivityRequest extends FormRequest
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
            'employee_uuid' => ['required'],
            'types' => ['sometimes', 'required'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        if(!empty($this->employee_uuid)){
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if(empty($employee)){
                throw new HttpResponseException(response("employee uuid dosent exist", 428));
            }
        }
    }
}
