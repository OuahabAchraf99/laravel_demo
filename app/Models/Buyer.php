<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Buyer extends Model
{
    use HasFactory,SoftDeletes;

    public function products()
    {
        return $this->belongsToMany(\App\Models\Product::class,'order_product','MemberID','product_id'); 
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class); 
    }
}
