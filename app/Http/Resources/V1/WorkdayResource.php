<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkdayResource extends JsonResource
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
            'active' => $this->active,
            'employer_id' => $this->employer_id,
            'employer_uuid' => $this->employer_uuid,
            'employee_id' => $this->employee_id,
            'employee_uuid' => $this->employee_uuid,
            'uuid' => $this->uuid,
            'status' => $this->status,
            'date' => $this->date,
            'start' => $this->start,
            'end' => $this->end,
            'minutes' => $this->minutes,
            'end' => $this->end,
            'timezone' => $this->timezone,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'place' => $this->place,
            'latitude_out' => $this->latitude_out,
            'longitude_out' => $this->longitude_out,
            'place_out' => $this->place_out,
        ];
    }
}
