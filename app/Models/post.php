<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\Models\category','category_posts')->withTimestamps();
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }
}
