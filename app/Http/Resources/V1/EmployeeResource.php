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
            'employeecontract_id' => $this->employeecontract_id,
            'employeecontract_uuid' => $this->employeecontract_uuid,
            'employeeaddress_id' => $this->employeeaddress_id,
            'employeeaddress_uuid' => $this->employeeaddress_uuid,
            'employeebeneficiary_id' => $this->employeebeneficiary_id,
            'employeebeneficiary_uuid' => $this->employeebeneficiary_uuid,
            'employeesalary_id' => $this->employeesalary_id,
            'employeesalary_uuid' => $this->employeesalary_uuid,
            'company_uuid' => $this->company_uuid,
            'client_uuid' => $this->client_uuid,
            'type' => $this->type,
            'firstname' => $this->firstname,
            'paternalsurname' => $this->paternalsurname,
            'maternalsurname' => $this->maternalsurname,
            'gender' => $this->gender,
            'phone' => $this->phone,
            'email' => $this->email,
            'birthdate' => $this->birthdate,
            'birthstate' => $this->birthstate,
            'matrimonialregime' => $this->matrimonialregime,
            'maritalstatus' => $this->maritalstatus,
            'rfc' => $this->rfc,
            'curp' => $this->curp,
            'nss' => $this->nss,
            'fonacot' => $this->fonacot,
            'fonacot_total' => $this->fonacot_total,
            'fonacot_discount' => $this->fonacot_discount,
            'infonavit' => $this->infonavit,
            'infonavit_creditnumber' => $this->infonavit_creditnumber,
            'infonavit_discount' => $this->infonavit_discount,
            'infonavit_factor' => $this->infonavit_factor,
        ];
    }
}
