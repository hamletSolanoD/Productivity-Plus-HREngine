<?php
namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash;

class UserLoginRequest extends FormRequest
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
            'email' => ['required'],
            'password' => ['required'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $user = User::where('email', $this->email)->first();
        if(empty($user)){
            throw new HttpResponseException(response("Email ".$this->email." is not registered", 409));
        }            
        if($user['type'] == "e"){
            $employee = Employee::where('id', $user['employee_id'])->first();
            if(empty($employee)){
                throw new HttpResponseException(response("Employee dosent exist", 428));
            }
        }
        if($user['type'] != "a"){
            $employer_id = $user['type'] == "e" ? $employee['employer_id'] : $user['employer_id'];
            $employer = Employer::where('id', $employer_id)->first();            
            if(empty($employer)){
                throw new HttpResponseException(response("Employer ".$employer_id." dosent exist", 428));
            }            
            if(!$employer['active']){
                throw new HttpResponseException(response("Inactive employer", 402));
            }
            $user->employer_uuid = $user['type'] == "e" ? $employer['uuid'] : $user->employer_uuid;
        }
        if($user['active']){
            if(Hash::check($this->password, $user['password'])){
                throw new HttpResponseException(response()->json($user, 200));
            } else {
                throw new HttpResponseException(response("Incorrect password", 409));
            }
        } else {
            throw new HttpResponseException(response("Inactive user", 401));
        }
    }
}