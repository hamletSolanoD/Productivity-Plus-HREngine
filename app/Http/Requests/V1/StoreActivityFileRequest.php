<?php

namespace App\Http\Requests\V1;

use App\Models\Activity;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

use Carbon\Carbon;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Str;

class StoreActivityFileRequest extends FormRequest
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
            'activity_uuid' => ['required'],
            //'uuid' => ['required', 'unique:activity_files,uuid'],
            'file' => ['required', 'max:2048', 'mimes:png,jpeg,gif,jpg,ppt,pptx,doc,docx,pdf,xls,xlsx,zip'],
        ];
    }
    
    public function failedValidation(Validator $validator){
        throw new HttpResponseException(response($validator->errors(), 406));
    }
    
    protected function passedValidation()
    {
        $activity = Activity::where('uuid', $this->activity_uuid)->first();
        if(empty($activity)){
            throw new HttpResponseException(response("activity uuid dosent exist", 428));
        }
        $file = $this->file;
        $this->merge([
            'activity_id' => $activity->id,
            'uuid' => Str::uuid()->toString(),
            'extension' => $file->getClientOriginalExtension()
        ]);
    }
}
