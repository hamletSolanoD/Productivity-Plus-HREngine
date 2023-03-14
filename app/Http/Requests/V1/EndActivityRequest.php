<?php

namespace App\Http\Requests\V1;

use App\Models\Activity;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class EndActivityRequest extends FormRequest
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
            'description' => ['sometimes', 'required'],
            'place_end' => ['sometimes', 'required'],
            'longitud_end' => ['sometimes', 'required'],
            'latitude_end' => ['sometimes', 'required'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    /*
    protected function passedValidation()
    {
        $uuid = $request->input('uuid');
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            throw new HttpResponseException(response("activity uuid dosent exist", 428));
        }
        $description = $request->input('description');
        $place_out = $request->input('place_out');
        $latitude_out = $request->input('latitude_out');
        $longitude_out = $request->input('longitude_out');
        $end = Carbon::now();
        $minutes = Carbon::now()->diffInMinutes($activity->start);
        $this->merge([
            'status' => 'C',
            'description' => $description,
            'place_out' => $place_out,
            'latitude_out' => $latitude_out,
            'longitude_out' => $longitude_out,
            'end' => $end,
            'minutes' => $minutes
        ]);
    }
    */
}
