<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table='salary';
    protected $fillable=[
      'employee_id'  ,
        'department_id',
        'designation_id',
        'basic',
    ];
    use HasFactory;
}
