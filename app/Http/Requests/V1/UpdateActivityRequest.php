<?php

namespace App\Http\Requests\V1;

use App\Models\Activity;
use App\Models\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;

class UpdateActivityRequest extends FormRequest
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
        $uuid = request('activity');
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            throw new HttpResponseException(response("activity uuid dosent exist", 428));
        }
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if(empty($session_user)){
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if($session_user['type'] != "b"){
            throw new HttpResponseException(response("Session user does not have privileges ", 401));
        }
        $activity->update(request()->all());
        $activity->table = "activity";
        BinnacleController::Log($activity, 'u', $session_user);
        throw new HttpResponseException(response("updated activity", 200));
    }
}
