<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'workday_id',
        'workday_uuid',
        'uuid',
        'type',
        'status',
        'start',
        'date',
        'end',
        'timezone',
        'minutes',
        'title',
        'description',
        'place',
        'latitude',
        'longitude',
        'place_end',
        'latitude_end',
        'longitude_end',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'workday_id',
        'created_at',
        'updated_at',
    ];
}
