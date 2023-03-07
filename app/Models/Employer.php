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
        'outsource',
        'uuid',
        'persontype',
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
        'email',
        'outsourceat',
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
