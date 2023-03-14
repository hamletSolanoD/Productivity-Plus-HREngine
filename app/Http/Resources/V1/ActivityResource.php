<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
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
            'workday_id' => $this->workday_id,
            'workday_uuid' => $this->workday_uuid,
            'uuid' => $this->uuid,
            'type' => $this->type,
            'status' => $this->status,
            'date' => $this->date,
            'start' => $this->start,
            'end' => $this->end,
            'minutes' => $this->minutes,
            'timezone' => $this->timezone,
            'description' => $this->description,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'place_end' => $this->place_end,
            'latitude_end' => $this->latitude_end,
            'longitude_end' => $this->longitude_end,
        ];
    }
}
