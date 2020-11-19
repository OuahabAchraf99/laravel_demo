<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    public function orders()
    {
        return $this->belongsToMany(\App\Models\Order::class,'order_product','product_id','order_id');
    }

    public function shopping_carts()
    {
        return $this->belongsToMany(\App\Models\ShoppingCart::class,'order_product','product_id','shopping_cart_id');
    }

    public function buyers()
    {
        return $this->belongsToMany(\App\Models\Buyer::class,'order_product','product_id','MemberID');
    }

    public function prices(){
        return $this->hasMany(\App\Models\Price::class);
    }

    public function files(){
        return $this->hasMany(\App\Models\File::class);
    }

    public function description(){
        return $this->belongsToMany('\App\Models\Description','product_description','product_id','description_id');
    }

    public function category(){
        return $this->belongsToMany('\App\Models\Category','product_category','product_id','CategoryID');
    }

    /**
    * The attributes that are mass assignable
    * @var array
    */
   /* protected $table='products';
    protected $fillable = [
        'brand_name',
        'nb_in_stock',
        'nb_out_stock',
        'quantity'
    ];*/

}
