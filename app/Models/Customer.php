<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table="customers";
    protected $primaryKey="id";


    public function setNameAttribute($value){
        $this->attributes['name']=ucwords($value);

    }
    public function  getUpdatedAtAttribute($value)
    {
        return date('d-M-Y',strtotime($value));
    }
}
