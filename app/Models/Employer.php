<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
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
