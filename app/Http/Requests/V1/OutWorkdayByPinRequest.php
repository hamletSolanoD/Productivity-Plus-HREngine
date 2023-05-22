<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/

namespace App\Http\Requests\V1;

use App\Models\Workday;
use App\Models\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Carbon\Carbon;

class OutWorkdayByPinRequest extends FormRequest
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
            'pin' => ['pin'],
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
        $user = User::where('pin', $this->pin)->first();
        if(empty($user)){
            throw new HttpResponseException(response("user pin dosent exist", 428));
        }
        $workday = Workday::where(['employee_id', 'status'], [$user->employee_id, 'o'])->first();
        if(empty($workday)){
            throw new HttpResponseException(response("workday open dosent exist", 428));
        }
        $end = Carbon::now();
        $minutes = Carbon::now()->diffInMinutes($workday->start);
        $this->merge([
            'uuid' => $workday->$uuid,
            'workday_id' => $workday->id,
            'status' => 'C',            
            'end' => $end,
            'minutes' => $minutes
        ]);
    }
}
