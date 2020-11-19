<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Notification extends Model
{
    use HasFactory,SoftDeletes;

    // Many to Many relationship
    public function members()
    {
         return $this->belongsToMany(\App\Models\Member::class);
    }
}
