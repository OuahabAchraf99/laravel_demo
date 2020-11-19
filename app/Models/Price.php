<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prices';


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'price_id';


     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;


   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
    * The attributes that are mass assignable
    * @var array
    */
    protected $fillable = [
        'min_quantity',
        'max_quantity',
        'price_dzd',
        'price_eur',
        'price_dollar'
    ];

    /**
    * Relationships
    * 
    */
    public public function product()
    {
        return $this->belongsTo(\App\Models\Product::class,'product_id');
    }


}
