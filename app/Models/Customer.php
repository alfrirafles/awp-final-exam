<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $primaryKey = 'customerNumber';
    protected $fillable = ['customerNumber',
        'customerName',
        'contactLastName',
        'contactFirstName',
        'phone',
        'addressLine1',
        'addressLine2',
        'city',
        'state',
        'postalCode',
        'country',
        'salesRepEmployeeNumber',
        'creditLimit'];

    public function orders(){
        return $this->hasMany(Order::class, 'customerNumber');
    }

    public function salesRep(){
        return $this->belongsTo(Employee::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }

    public function payments(){
        return $this->hasMany(Payment::class, 'customerNumber');
    }

    public function usesTimestamps(): bool
    {
        return false;
    }
}
