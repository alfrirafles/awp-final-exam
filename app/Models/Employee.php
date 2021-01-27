<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $primaryKey = 'employeeNumber';

    public function responsibleFor(){
        return $this->hasMany(Customer::class, 'salesRepEmployeeNumber');
    }

    public function office(){
        return $this->belongsTo(Office::class, 'officeCode', 'officeCode');
    }
}
