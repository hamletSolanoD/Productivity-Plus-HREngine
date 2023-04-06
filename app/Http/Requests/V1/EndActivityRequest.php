<?php

namespace App\Http\Requests\V1;

use App\Models\User;
use App\Models\Activity;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

use App\Http\Controllers\Api\V1\BinnacleController;
use Illuminate\Http\Request;

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
    
    protected function passedValidation()
    {
        $uuid = request('uuid');
        $activity = Activity::where('uuid', $uuid)->first();
        if(empty($activity)){
            throw new HttpResponseException(response("activity uuid dosent exist", 428));
        }
        $activity->description = request('description');
        $activity->place_end = request('place_end');
        $activity->latitude_end = request('latitude_end');
        $activity->longitude_end = request('longitude_end');
        $activity->status = "C";
        $end = Carbon::now();
        $activity->end = $end;
        $minutes = Carbon::now()->diffInMinutes($activity->start);
        $activity->minutes = $minutes;
        if($activity->save()){
            throw new HttpResponseException(response("activity end", 200));
        } else {            
            throw new HttpResponseException(response("system error", 500));
        }
    }
}
