<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class UpdateWorkdayRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'uuid' => ['sometimes', 'required', 'unique:workdays,uuid'],
            'employee_uuid' => ['sometimes', 'required'],
            'employer_uuid' => ['sometimes', 'required'],
            'place' => ['sometimes', 'required'],
            'latitude' => ['sometimes', 'required'],
            'longitude' => ['sometimes', 'required'],
            'timezone' => ['sometimes', 'required'],
            'uuid' => ['sometimes', 'required'],
            'place_out' => ['sometimes', 'required'],
            'latitude_out' => ['sometimes', 'required'],
            'longitude_out' => ['sometimes', 'required'],
        ];
    }
}
