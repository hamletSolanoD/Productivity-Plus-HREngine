<?php

namespace App\Http\Requests\V1;

use App\Models\Employer;
use App\Models\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;

class DeleteEmployerRequest extends FormRequest
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
            'user_uuid' => ['required']
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $uuid = request('employer');
        $employer = Employer::where('uuid', $uuid)->first();
        if(empty($employer)){
            throw new HttpResponseException(response("Employer uuid dosent exist", 428));
        }
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if(empty($session_user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($session_user['type'] != "a"){
            throw new HttpResponseException(response("Session user does not have privileges", 401));
        }
        $employer->delete();
        $employer->table = "employer";
        BinnacleController::Log($employer, 'd', $session_user);
        throw new HttpResponseException(response("Deleted employer", 200));
    }
}
