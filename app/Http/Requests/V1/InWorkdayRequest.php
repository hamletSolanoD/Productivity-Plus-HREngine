<?php

namespace App\Http\Requests\V1;
use App\Models\Employee;
use App\Models\Employer;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Carbon\Carbon;

class InWorkdayRequest extends FormRequest
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
            'uuid' => 'required|unique:workdays,uuid',
            'employee_uuid' => 'required',
            'employer_uuid' => 'required',
            'place' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'timezone' => 'required',
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
        $employer = Employer::where('uuid', $this->employer_uuid)->first();
        if(empty($employer)){
            throw new HttpResponseException(response("employer uuid dosent exist", 428));
        }
        $start = Carbon::now();
        $date = $start->format("Y-m-d"); 
        $this->merge([
            'employee_id' => $employee->id,
            'employer_id' => $employer->id,
            'status' => 'O',            
            'start' => $start,
            'date' => $start->format("Y-m-d")
        ]);
    }
}
