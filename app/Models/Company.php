<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'uuid',
        'rfc',
        'employerregistry',
        'businessname',
        'tradename',
        'legalrepresentative',
        'phone',        
    ];
    
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
    ];
}
