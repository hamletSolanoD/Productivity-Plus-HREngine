<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateEmployeeFileRequest extends FormRequest
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
            'employee_uuid' => ['sometimes', 'required'],
            'uuid' => ['sometimes', 'required', 'unique:employee_files,uuid'],
            'file' => ['sometimes', 'required', 'max:2048', 'mimes:png,jpeg,gif,jpg,ppt,pptx,doc,docx,pdf,xls,xlsx,zip'],            
            'document' => ['sometimes', 'required'],
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
}
