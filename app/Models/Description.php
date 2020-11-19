<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    use HasFactory;

    /**
    * relationships
    *
    */
    public public function product()
    {
        return $this->belongsToMany('\App\Models\Product','product_description','description_id','product_id');

    }
}
