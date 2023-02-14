<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'employee_guid',
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        'company_id',
        'company_guid',
        'customer_id',
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
        'rfc_guid',
        'curp',
        'curp_value',
        'curp_guid',
        'nss',
        'nss_value',
        'nss_guid',
        'fonacot',
        'fonacot_total',
        'fonacot_discount',
        'fonacot_guid',
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
        'infonavit_guid',
        'bankcontract',
        'bankcontract_interbankkey',
        'bankcontract_guid',
        'jobapplication',
        'jobapplication_guid',
        'birthcertificate',
        'birthcertificate_guid',
        'studycertificate',
        'studycertificate_guid',
        'proofofaddress',
        'proofofaddress_guid',
        'workcontract',
        'workcontract_guid',
        'workregulation',
        'workregulation_guid',
        'bankpolicy',
        'bankpolicy_guid',
        'id',
        'id_guid',
        'infonavitprequalification',
        'infonavitprequalification_guid',
        'fonacotdisclaimer',
        'fonacotdisclaimer_guid',
        'agreementformat',
        'agreementformat_guid',
        'settlementreceipt',
        'settlementreceipt_guid',
        'administrativerecord',
        'administrativerecord_guid',
    ];
    /*
    public function invoices(){
        return $this->hasMany(Invoice::class);
    }
    */
}
