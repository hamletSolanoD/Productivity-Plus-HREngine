<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'uuid',
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        'company_id',
        'company_uuid',
        'customer_id',
        'customer_uuid',
        'firstname',
        'paternalsurname',
        'maternalsurname',
        'gender',
        'phone',
        'email',
        'birthdate',
        'birthstate',
        'matrimonialregime',
        'maritalstatus',
        'rfc',
        'rfc_value',
        'rfc_uuid',
        'curp',
        'curp_value',
        'curp_uuid',
        'nss',
        'nss_value',
        'nss_uuid',
        'fonacot',
        'fonacot_total',
        'fonacot_discount',
        'fonacot_uuid',
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
        'infonavit_uuid',
        'bankcontract',
        'bankcontract_interbankkey',
        'bankcontract_uuid',
        'jobapplication',
        'jobapplication_uuid',
        'birthcertificate',
        'birthcertificate_uuid',
        'studycertificate',
        'studycertificate_uuid',
        'proofofaddress',
        'proofofaddress_uuid',
        'workcontract',
        'workcontract_uuid',
        'workregulation',
        'workregulation_uuid',
        'bankpolicy',
        'bankpolicy_uuid',
        'id',
        'id_uuid',
        'infonavitprequalification',
        'infonavitprequalification_uuid',
        'fonacotdisclaimer',
        'fonacotdisclaimer_uuid',
        'agreementformat',
        'agreementformat_uuid',
        'settlementreceipt',
        'settlementreceipt_uuid',
        'administrativerecord',
        'administrativerecord_uuid',
    ];
}
