<?php

namespace App\Http\Requests\V1;

use App\Models\Workday;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Carbon\Carbon;

class OutWorkdayRequest extends FormRequest
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
            'place_out' => ['required'],
            'latitude_out' => ['required'],
            'longitude_out' => ['required'],
        ];
    }

    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $workday = Workday::where('uuid', $this->uuid)->first();
        if(empty($workday)){
            throw new HttpResponseException(response("workday uuid dosent exist", 428));
        }
        $end = Carbon::now();
        $minutes = Carbon::now()->diffInMinutes($workday->start);
        $this->merge([
            'workday_id' => $workday->id,
            'status' => 'C',            
            'end' => $end,
            'minutes' => $minutes
        ]);
    }
}
