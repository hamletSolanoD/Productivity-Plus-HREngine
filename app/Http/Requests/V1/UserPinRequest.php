<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;

class UserPinRequest extends FormRequest
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
            'user_uuid' => ['required'],
            'password' => ['required'],
            'activated' => ['required'],
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
            throw new HttpResponseException(response("User dosent exist", 428));
        }
        if ($user['type'] == "e") {
            throw new HttpResponseException(response("User without permisions", 402));
        }
        if ($user['type'] != "a") {
            $employer = Employer::where('id', $user['employer_id'])->first();
            if (empty($employer)) {
                throw new HttpResponseException(response("Employer " . $employer_id . " dosent exist", 428));
            }
            if (!$employer['active']) {
                throw new HttpResponseException(response("Inactive employer", 402));
            }
        }
        if ($user['active']) {
            if (!Hash::check($this->password, $user['password'])) {
                throw new HttpResponseException(response("Incorrect password", 409));
            }
        } else {
            throw new HttpResponseException(response("Inactive user", 401));
        }
        $employee = Employee::where('uuid', $this->employee_uuid)->first();
        if (empty($employee)) {
            throw new HttpResponseException(response("Employee dosent exist", 428));
        }
        $employee_user = User::where('employee_uuid', $this->employee_uuid)->first();
        if (empty($employee_user)) {
            throw new HttpResponseException(response("Employee dosent have user", 428));
        }
    }
}
