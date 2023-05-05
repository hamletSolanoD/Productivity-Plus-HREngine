<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

use App\Http\Resources\V1\EmployerResource;

class StoreEmployerRequest extends FormRequest
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
            'active' => ['required', Rule::in([true, false])],
            'outsource' => ['required_if:persontype,=,m', 'prohibited_if:persontype,=,f', Rule::in([true, false])],
            'rfc' => ['required'],
            'employerregistry' => ['required'],
            'persontype' => ['required', Rule::in(['m', 'f'])],
            'outsourceat' => ['required_if:outsource,=,true', 'prohibited_if:persontype,=,f'],
            'tradename' => ['required', 'unique:employers,tradename'],
            'businessname' => ['required_if:persontype,=,m', 'prohibited_if:persontype,=,f'],
            'firstname' => ['required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'paternalsurname' => ['required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'maternalsurname' => ['required_if:persontype,=,f', 'prohibited_if:persontype,=,m'],
            'gender' => ['required_if:persontype,=,f', 'prohibited_if:persontype,=,m', Rule::in(['m', 'f'])],
            'birthdate' => ['required_if:persontype,=,f', 'prohibited_if:persontype,=,m', 'date_format:Y-m-d'],
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response($validator->errors(), 406));
    }

    protected function passedValidation()
    {
        $session_user = User::where('uuid', $this->user_uuid)->first();
        if (empty($session_user)) {
            throw new HttpResponseException(response("Session user uuid dosent exist", 428));
        }
        if ($session_user['type'] != "b" && $session_user['type'] != "a") {
            throw new HttpResponseException(response("Session user does not have privileges ", 401));
        }
        $uuid = Str::uuid()->toString();
        $this->merge([
            'uuid' => $uuid
        ]);
        new EmployerResource(Employer::create(request()->all()));
        throw new HttpResponseException(response($uuid, 200));
    }
}
