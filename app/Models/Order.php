<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory,SoftDeletes;

    public function orders()
    {
        return $this->belongsToMany(\App\Models\Product::class,'order_product','order_id','product_id'); 
    }

    // One To Many (Inverse) Relationship
    
    public function shopping_carts()
    {
         return $this->belongsTo(\App\Models\ShoppingCart::class);
    }
    
    public function buyer()
    {
        return $this->belongsTo(\App\Models\Buyer::class); 
    }

}
