<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeFileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'employee_id' => $this->employee_id,
            'employee_uuid' => $this->employee_uuid,
            'uuid' => $this->uuid,
            'file' => $this->file,
            'checked' => $this->checked,
            'extension' => $this->extension,
        ];
    }
}
