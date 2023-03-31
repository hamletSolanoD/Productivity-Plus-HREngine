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
        'employer_uuid',
        'uuid',
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
        'employer_id',
        'created_at',
        'updated_at',
    ];
}
