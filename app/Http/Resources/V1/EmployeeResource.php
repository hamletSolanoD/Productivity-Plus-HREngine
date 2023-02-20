<?php

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
            'id' => $this->id,    
            'uuid' => $this->uuid,
            'employeecontract_id' => $this->employeecontract_id,
            'employeeaddress_id' => $this->employeeaddress_id,
            'employeebeneficiary_id' => $this->employeebeneficiary_id,
            'employeesalary_id' => $this->employeesalary_id,
            'company_id' => $this->company_id,
            'company_uuid' => $this->company_uuid,
            'customer_id' => $this->customer_id,
            'customer_uuid' => $this->customer_uuid,
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
            'rfc_value' => $this->rfc_value,
            'rfc_uuid' => $this->rfc_uuid,
            'curp' => $this->curp,
            'curp_value' => $this->curp_value,
            'curp_uuid' => $this->curp_uuid,
            'nss' => $this->nss,
            'nss_value' => $this->nss_value,
            'nss_uuid' => $this->nss_uuid,
            'fonacot' => $this->fonacot,
            'fonacot_total' => $this->fonacot_total,
            'fonacot_discount' => $this->fonacot_discount,
            'fonacot_uuid' => $this->fonacot_uuid,
            'infonavit_creditnumber' => $this->infonavit_creditnumber,
            'infonavit_discount' => $this->infonavit_discount,
            'infonavit_factor' => $this->infonavit_factor,
            'infonavit_uuid' => $this->infonavit_uuid,
            'bankcontract' => $this->bankcontract,
            'bankcontract_interbankkey' => $this->bankcontract_interbankkey,
            'bankcontract_uuid' => $this->bankcontract_uuid,
            'jobapplication' => $this->jobapplication,
            'jobapplication_uuid' => $this->jobapplication_uuid,
            'birthcertificate' => $this->birthcertificate,
            'birthcertificate_uuid' => $this->birthcertificate_uuid,
            'studycertificate' => $this->studycertificate,
            'studycertificate_uuid' => $this->studycertificate_uuid,
            'proofofaddress' => $this->proofofaddress,
            'proofofaddress_uuid' => $this->proofofaddress_uuid,
            'workcontract' => $this->workcontract,
            'workcontract_uuid' => $this->workcontract_uuid,
            'workregulation' => $this->workregulation,
            'workregulation_uuid' => $this->workregulation_uuid,
            'bankpolicy' => $this->bankpolicy,
            'bankpolicy_uuid' => $this->bankpolicy_uuid,
            'idcard' => $this->idcard,
            'idcard_uuid' => $this->idcard_uuid,
            'infonavitprequalification' => $this->infonavitprequalification,
            'infonavitprequalification_uuid' => $this->infonavitprequalification_uuid,
            'fonacotdisclaimer' => $this->fonacotdisclaimer,
            'fonacotdisclaimer_uuid' => $this->fonacotdisclaimer_uuid,
            'agreementformat' => $this->agreementformat,
            'agreementformat_uuid' => $this->agreementformat_uuid,
            'settlementreceipt' => $this->settlementreceipt,
            'settlementreceipt_uuid' => $this->settlementreceipt_uuid,
            'administrativerecord' => $this->administrativerecord,
            'administrativerecord_uuid' => $this->administrativerecord_uuid,
        ];
    }
}
