<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'uuid' => $this->uuid,
            'rfc' => $this->rfc,
            'employerRegistry' => $this->employerregistry,
            'businessName' => $this->businessName,
            'tradename' => $this->tradename,
            'legalRepresentative' => $this->legalRepresentative,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
        //return parent::toArray($request);
    }
}
