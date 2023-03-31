<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Employee;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

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
            //'required_if:persontype,=,f', 'prohibited_if:persontype,=,m']
            /*
            'employer_uuid' => ,
            'firstname' =>,
            'paternalsurname' =>,
            'maternalsurname' =>,
            'gender' =>,
            'phone' =>,
            'email' =>,
            'birthdate' => 'date_format:Y-m-d',
            'birthstate' =>,
            'matrimonialregime' =>,
            'maritalstatus' =>,
            'rfc' =>,
            'curp' =>,
            'nss' =>,
            'fonacot' =>,
            'fonacot_total' => 'decimal:2',
            'fonacot_discount' => 'decimal:2',
            'infonavit' =>,
            'infonavit_creditnumber',
            'infonavit_discount' => 'decimal:2'
            'infonavit_factor' => , 
            */
            /*
            'uuid' => ['required'],
            'firstname' => ['required'],
            'gender' => ['required'],
            'birthdate' => ['required', Rule::in(['M', 'F', 'm', 'f'])],
            'curp' => ['required'],
            */
        ];
    }
}
