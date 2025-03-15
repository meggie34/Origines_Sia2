<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    protected $fillable = ['Product Number', 'Product Name', 'Product Size', 'Quantity'];

    public function categories()
    {
        return $this->hasMany(Category::class, 'product_id', 'product_id');
    }
}





