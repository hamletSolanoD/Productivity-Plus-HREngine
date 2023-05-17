<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class GetWorkdayByEmployeerRequest extends FormRequest
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
            'employer_uuid' => ['required'],
            'user_uuid' => ['required']
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
            throw new HttpResponseException(response("session user uuid dosent exist", 428));
        }
        if ($user['type'] != "b" && $user['type'] != "a") {
            throw new HttpResponseException(response("session user does not have privileges ", 401));
        }
        $employer = Employer::where('uuid', $this->employer_uuid)->first();
        if (empty($employer)) {
            throw new HttpResponseException(response("Employer uuid dosent exist", 428));
        }
    }
}
