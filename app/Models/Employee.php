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
        'employeecontract_uuid',
        'employeeaddress_uuid',
        'employeebeneficiary_uuid',
        'employeesalary_uuid',
        'employer_uuid',
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
        'rfc',
        'curp',
        'nss',
        'fonacot',
        'fonacot_total',
        'fonacot_discount',
        'infonavit',
        'infonavit_creditnumber',
        'infonavit_discount',
        'infonavit_factor',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'employeecontract_id',
        'employeeaddress_id',
        'employeebeneficiary_id',
        'employeesalary_id',
        'employer_id',
        'created_at',
        'updated_at',
    ];
}
