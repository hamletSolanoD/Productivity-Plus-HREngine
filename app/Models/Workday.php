<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{
    
    use HasFactory;
    protected $fillable = [
        'employee_uuid',
        'client_uuid',
        'company_uuid',
        'status',
        'date',
        'start',
        'pause',
        'resume',
        'end',
        'minutes',
        'latitude',
        'longitude',
        'place',
    ];
}
