<?php

namespace App\Http\Requests\V1;
use App\Models\Employee;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;

class StoreUserRequest extends FormRequest
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
            'active' => 'required',
            'type' => 'required',
            //'employee_id' => 'required_if:type,=,e|integer',
            'employee_uuid' => 'required_if:type,=,e|size:36',
            'name' => 'required',
            'uuid' => 'required|size:36|unique:users,uuid',
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

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $employee = Employee::where('uuid', $this->employee_uuid)->first();
        if(empty($employee)){
            throw new HttpResponseException(response("employee uuid dosent exist", 428));
        }
        $this->merge([
            'employee_id' => $employee->id,
            'password' => Hash::make($this->password)
        ]);
    }
}
