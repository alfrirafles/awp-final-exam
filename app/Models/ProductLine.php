<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductLine extends Model
{
    use HasFactory;
    protected $primaryKey = 'productLine';
    protected $table = 'productlines';
    protected $keyType = 'string';
    public $incrementing = false;

    public function products(){
        return $this->hasMany(Product::class, 'productLine', 'productLine');
    }
}
