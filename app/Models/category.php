<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts()
    {
        return $this->belongsToMany('App\Models\post','category_posts')->orderBy('created_at','DESC')->paginate(2);
    }
       
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User','category_users','user_id');
    }

    public function agents()
    {
        return $this->belongsToMany('App\Models\Agent','category_agents');
    }
    
}
