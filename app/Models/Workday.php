<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{    
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'employee_id',
        'employee_uuid',
        'employer_id',
        'employer_uuid',
        'uuid',
        'status',
        'date',
        'start',
        'end',
        'timezone',
        'minutes',
        'latitude',
        'longitude',
        'place',
        'latitude_out',
        'longitude_out',
        'place_out',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'employee_id',
        'employer_id',
        'created_at',
        'updated_at',
    ];
}
