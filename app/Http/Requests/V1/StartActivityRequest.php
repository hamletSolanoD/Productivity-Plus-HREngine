<?php

namespace App\Http\Requests\V1;

use App\Models\Workday;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class StartActivityRequest extends FormRequest
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
            'workday_uuid' => ['required'],
            //'uuid' => ['required', 'unique:activities,uuid'],
            'type' => ['required'],
            'timezone' => ['required'],
            'description' => ['sometimes', 'required'],
            'place' => ['sometimes', 'required'],
            'longitud' => ['sometimes', 'required'],
            'latitude' => ['sometimes', 'required'],
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $workday = Workday::where('uuid', $this->workday_uuid)->first();
        if(empty($workday)){
            throw new HttpResponseException(response("workday uuid dosent exist", 428));
        }
        $start = Carbon::now();
        $date = $start->format("Y-m-d"); 
        $this->merge([
            'workday_id' => $workday->id,
            'uuid' => Str::uuid()->toString(),
            'status' => 'O',            
            'start' => $start,
            'date' => $start->format("Y-m-d"),
        ]);
    }
}
