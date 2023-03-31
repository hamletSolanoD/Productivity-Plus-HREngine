<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;

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
            'user_uuid' => ['required'],
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
        $uuid = request('user');
        $user = User::where('uuid', $uuid)->first();
        if(empty($user)){
            throw new HttpResponseException(response("User uuid dosent exist", 428));
        }
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if(empty($session_user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($session_user['type'] == "e" || ($user['type'] == "a" && $session_user['type'] != "a") || ($user['type'] == "b" && $session_user['type'] != "a")){
            throw new HttpResponseException(response("Session user does not have privileges", 401));
        }
        $employee_id = $user->employee_id;
        $employer_id = $user->employer_id;
        $password = $user->password;
        if(!empty($this->password)){
            $password = Hash::make($this->password);
        }
        if($this->type == "e" && !empty($this->employee_uuid)){
            $employee = Employee::where('uuid', $this->employee_uuid)->first();
            if(empty($employee)){
                throw new HttpResponseException(response("Employee uuid dosent exist", 428));
            }
            $employee_id = $employee->id;
        }
        if($this->type == "b" && !empty($this->employer_uuid)){
            $employer = Employer::where('uuid', $this->employer_uuid)->first();
            if(empty($employer)){
                throw new HttpResponseException(response("Employer uuid dosent exist", 428));
            }
            $employer_id = $employer->id;
        }
        $this->merge([
            'employee_id' => $employee_id,
            'employer_id' => $employer_id,
            'password' => $password
        ]);
        $user->update(request()->all());
        $user->table = "user";
        BinnacleController::Log($user, 'u', $session_user);
        throw new HttpResponseException(response("updated user", 200));
    }
}