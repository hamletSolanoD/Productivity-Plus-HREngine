<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Employer;

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
            'employer_uuid' => ['required']
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $employer = Employer::where('uuid', $this->employer_uuid)->first();
        if(empty($employer)){
            throw new HttpResponseException(response("employer uuid dosent exist", 428));
        }
    }
}
