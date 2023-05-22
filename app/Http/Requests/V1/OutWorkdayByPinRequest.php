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
use Illuminate\Support\Facades\DB;

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
            'pin' => ['required'],
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
        $uuid = DB::table('workdays')->where('employee_id', '=', $user->employee_id)->orderBy('id', 'desc')->take(1)->value('uuid');
        $workday = WorkDay::where('uuid', $uuid)->first();
        //$workday = Workday::where('employee_id', $user->employee_id)->first();
        if(empty($workday) || $workday->status == "c"){
            throw new HttpResponseException(response("workday open dosent exist", 428));
        }
        $end = Carbon::now();
        $minutes = Carbon::now()->diffInMinutes($workday->start);
        $this->merge([
            'uuid' => $uuid,
            'workday_id' => $workday->id,
            'status' => 'C',            
            'end' => $end,
            'minutes' => $minutes
        ]);
    }
}
