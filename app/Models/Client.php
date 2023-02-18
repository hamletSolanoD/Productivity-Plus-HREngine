<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'type',
        'rfc',    
        'firstname',
        'paternalsurname',
        'maternalsurname',
        'gender',
        'birthdate',
        'employerregistry',
        'businessname',
        'tradename',
        'legalrepresentative',
        'phone',        
    ];
}
