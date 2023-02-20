<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployeeRequest extends FormRequest
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
            'uuid' => ['uuid'],
            'firstname' => ['required'],
            'gender' => ['required'],
            'birthdate' => ['required', Rule::in(['M', 'F', 'm', 'f'])],
            'curp_value' => ['required'],
        ];
    }
}
