<?php

namespace App\Http\Requests\V1;

use App\Models\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;

class DeleteUserRequest extends FormRequest
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
            throw new HttpResponseException(response("Session user does not have privileges ", 401));
        }
        $user->delete();
        $user->table = "user";
        BinnacleController::Log($user, 'd', $session_user);
        throw new HttpResponseException(response("Deleted user", 200));
    }
}
