<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        'company_id',
        'company_uuid',
        'client_id',
        'client_uuid',
        'type',
        'gender',
        'firstname',
        'paternalsurname',
        'maternalsurname',
        'phone',
        'email',
        'birthdate',
        'birthstate',
        'matrimonialregime',
        'maritalstatus',
        'rfc_value',
        'curp_value',
        'nss_value',
        'fonacot_total',
        'fonacot_discount',
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
        'bankcontract_interbankkey',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
