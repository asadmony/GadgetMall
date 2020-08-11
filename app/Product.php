<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['productcode', 'productname', 'description', 'brand', 'category', 'price', 'quantity', 'discount', 'discountprice'];

    public function images()
    {
        return $this->hasMany('App\ProductImage');
    }
    public function features()
    {
        return $this->hasMany('App\ProductFeature');
    }
}
