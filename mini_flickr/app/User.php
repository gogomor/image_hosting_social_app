<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function images(){
        return $this->hasMany('App\Images');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function albums(){
        return $this->hasMany('App\Album');
    }
    public function favourites(){
        return $this->hasMany('App\Favourite');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
