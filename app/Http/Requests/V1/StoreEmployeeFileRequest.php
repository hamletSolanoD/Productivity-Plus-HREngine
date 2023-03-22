<?php

namespace App\Http\Requests\V1;

use App\Models\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class StoreEmployeeFileRequest extends FormRequest
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
            //'uuid' => ['required', 'unique:employee_files,uuid'],
            'file' => ['required', 'max:2048', 'mimes:png,jpeg,gif,jpg,ppt,pptx,doc,docx,pdf,xls,xlsx,zip'],
            'document' => ['required']
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $employee = Employee::where('uuid', $this->employee_uuid)->first();
        if(empty($employee)){
            throw new HttpResponseException(response("employee uuid dosent exist", 428));
        }
        $file = $this->file;
        $this->merge([
            'employee_id' => $employee->id,
            'uuid' => Str::uuid()->toString(),
            'extension' => $file->getClientOriginalExtension(),
            'checked' => false,
        ]);
    }
}
