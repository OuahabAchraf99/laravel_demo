<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShoppingCart extends Model
{
    use HasFactory,SoftDeletes;
    
    public function shopping_carts()
    {
        return $this->belongsToMany(\App\Models\Product::class,'order_product','shopping_cart_id','product_id'); 
    }

    // One To Many Relationship
    
    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }
}
