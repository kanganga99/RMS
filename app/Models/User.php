<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// use Illuminate\Database\Eloquent\casts\Attribute;
// use Illuminate\Database\Eloquent\Model;



class User extends Authenticatable
{
    // use HasApiTokens, HasFactory, Notifiable;
    use  Notifiable;

    public function categories()
    {
        return $this->belongsToMany('App\Models\category','category_users')->withTimestamps();
    }
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        // 'categories',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
 
    public function getRouteKeyName()
    {
        return 'slug';
    }
    // public function categories()
    // {
    //     return $this->belongsTo(category::class,'category_id')->withTimestamps();
    // }  
 
}