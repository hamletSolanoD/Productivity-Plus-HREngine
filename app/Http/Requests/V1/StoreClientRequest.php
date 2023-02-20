<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
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
            'uuid' => ['required'],
            'type' => ['required', Rule::in(['I', 'B', 'i', 'b'])],
            'rfc' => ['required'],
            'businessname' => ['required'],
            'tradename' => ['required'],
        ];
    }
}
