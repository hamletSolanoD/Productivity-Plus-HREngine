<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //return false;
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'active' => ['sometimes', 'required'],
            /*
            'active' => 'sometimes|required',
            'type' => 'sometimes|required',
            'employee_id' => 'sometimes|required_if:type,=,e|integer',
            'employee_uuid' => 'sometimes|required_if:type,=,e|size:36',
            'name' => 'sometimes|required',
            'uuid' => 'sometimes|required|size:36',
            'email' => 'sometimes|required|email|unique:users,email',
            'password' => [
                'sometimes|required',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
            */
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response()->json([
            'success'   => false,
            'message'   => 'Validation errors',
            'data'      => $validator->errors()
        ]));
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'password' => Hash::make($this->password)
        ]);
    }
}
