<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $primaryKey = 'orderNumber';
    protected $fillable = ['orderNumber',
        'orderDate',
        'requiredDate',
        'shippedDate',
        'status',
        'comments',
        'customerNumber'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customerNumber');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class,
            'orderdetails',
            'orderNumber',
            'productCode');
    }

    public function usesTimestamps(): bool
    {
        return false;
    }
}
