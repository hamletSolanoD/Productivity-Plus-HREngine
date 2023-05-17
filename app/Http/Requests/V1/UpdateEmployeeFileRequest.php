<?php

namespace App\Http\Requests\V1;

use App\Models\User;

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
            'user_uuid' => ['required'],
            'employee_uuid' => ['sometimes', 'required'],
            'uuid' => ['sometimes', 'required', 'unique:employee_files,uuid'],
            'file' => ['sometimes', 'required', 'max:2048', 'mimes:png,jpeg,gif,jpg,ppt,pptx,doc,docx,pdf,xls,xlsx,zip'],
            'document' => ['sometimes', 'required'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $user = User::where('uuid', $this->user_uuid)->first();
        if (empty($user)) {
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if ($user['type'] != "b" && $user['type'] != "a") {
            throw new HttpResponseException(response("Session user does not have privileges ", 401));
        }
    }
}
