<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $primaryKey = 'productCode';
    public $incrementing = false;
    protected $fillable = ['productCode',
        'productName',
        'productLine',
        'productScale',
        'productVendor',
        'productDescription',
        'quantityInStock',
        'buyPrice',
        'msrp'];

    public function getProductLine()
    {
        return $this->belongsTo(ProductLine::class, 'productLine');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class,
            'orderdetails',
            'productCode',
            'orderNumber');
    }

    public function usesTimestamps(): bool
    {
        return false;
    }
}
