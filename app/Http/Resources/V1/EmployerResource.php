<?php
/*
╔══════════════════════════════════════════════════╗
║        © 2023 Productivity Plus HR Engine        ║
╠══════════════════════════════════════════════════╣
║   In memory of Patricia Ivonne Alvarez Avitia!   ║
╚══════════════════════════════════════════════════╝
*/

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployerResource extends JsonResource
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
            'active' => $this->active,
            'outsource' => $this->outsource,
            'uuid' => $this->uuid,
            'outsourceat' => $this->outsourceat,
            'persontype' => $this->persontype,
            'rfc' => $this->rfc,
            'employerregistry' => $this->employerregistry,
            'tradename' => $this->tradename,
            'businessname' => $this->businessname,
            'firstname' => $this->firstname,
            'paternalsurname' => $this->paternalsurname,
            'maternalsurname' => $this->maternalsurname,
            'gender' => $this->gender,
            'birthdate' => $this->birthdate,
            'legalrepresentative' => $this->legalrepresentative,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
    }
}
