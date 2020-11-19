<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Member extends Model
{
    use HasFactory,SoftDeletes;

        // Many To Many Relationship
        public function preffered_categories()
        {
             return $this->belongsToMany(\App\Models\Category::class);
        }

        // Many To Many Relationship
        public function notifications()
        {
             return $this->belongsToMany(\App\Models\Notification::class);
        }        
}
