<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
    use HasFactory,SoftDeletes;

        // Many to Many relationship
        public function members()
        {
             return $this->belongsToMany(\App\Models\Member::class);
        }

        public function products()
        {
            return $this->belongsToMany('\App\Models\Product','product_category','CategoryID','product_id'); 
        }
}
