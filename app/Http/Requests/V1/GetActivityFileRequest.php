<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Activity;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class GetActivityFileRequest extends FormRequest
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
            'activity_uuid' => ['required'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $activity = Activity::where('uuid', $this->activity_uuid)->first();
        if(empty($activity)){
            throw new HttpResponseException(response("activity uuid dosent exist", 428));
        }
    }
}
