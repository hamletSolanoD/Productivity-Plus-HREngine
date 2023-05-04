<?php

namespace App\Http\Requests\V1;

use App\Http\Resources\V1\UserResource;
use App\Models\User;
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
            'user_uuid' => ['required'],
            'active' => 'required', Rule::in([true, false]),
            'type' => ['required', Rule::in(['e', 'b', 'a'])],
            'employee_uuid' => ['required_if:type,=,e', 'prohibited_if:persontype,<>,e'],
            'employer_uuid' => ['required_if:type,=,b', 'prohibited_if:persontype,<>,b'],
            'name' => 'required',
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
        if ($user['type'] == "e" || ($this->type == "a" && $user['type'] != "a") || ($this->type == "b" && $user['type'] != "a")) {
            throw new HttpResponseException(response("Session user does not have privileges", 401));
        }
        $employee_id = null;
        $employer_id = null;
        if ($this->type == "e") {
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if (empty($employee)) {
                throw new HttpResponseException(response("Employee uuid dosent exist", 428));
            }
            $employee_id = $employee->id;
        }
        if ($this->type == "b") {
            $employer = Employer::where('uuid', $this->employer_uuid)->first();
            if (empty($employer)) {
                throw new HttpResponseException(response("Employer uuid dosent exist", 428));
            }
            $employer_id = $employer->id;
        }
        $uuid =  Str::uuid()->toString();
        $this->merge([
            'uuid' => $uuid,
            'employee_id' => $employee_id,
            'employer_id' => $employer_id,
            'password' => Hash::make($this->password)
        ]);
        new UserResource(User::create($this->all()));
        return response($uuid, 200);
    }
}
