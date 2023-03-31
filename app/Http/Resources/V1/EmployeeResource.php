<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/
namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
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
            'active',
            'active',
            'outsource',
            'uuid',
            'outsourceat',
            'persontype',
            'rfc',
            'employerregistry',
            'tradename',
            'businessname',
            'firstname',
            'paternalsurname',
            'maternalsurname',
            'gender',
            'birthdate',
            'legalrepresentative',
            'phone',
            'email',
        ];
    }
}
