<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
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
            'active' => 'required',
            'type' => 'required',
            'employee_id' => 'required|integer',
            'employee_uuid' => 'required|size:16',
            'name' => 'required',
            'uuid' => 'required|size:16',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
        ];
    }
}
