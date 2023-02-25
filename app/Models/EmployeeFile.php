<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employee_uuid',
        'checked',
        'file',
        'uuid',
    ]; 
}
