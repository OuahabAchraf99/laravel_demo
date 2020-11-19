<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /**
    * The table associated with the model
    *
    * @var string
    */
    protected $table = "files";

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'file_id';


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
        'description',
        'size',
        'extension',
        'name',
        'url',
        'type',
    ];

    /** 
    * Relationships
    *
    */

    public function product(){
        return $this->belongsTo(\App\Models\Product::class,'product_id');
    }


}
