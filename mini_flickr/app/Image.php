<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function comments(){
    	return $this->hasMany('App\Comment');
    }
    public function albums(){
    	return $this->belongsToMany('App\Comment', 'album_image', 'image_id', 'album_id');
    }
    public function tags(){
    	return $this->belongsToMany('App\Tag', 'image_tag', 'image_id', 'tag_id');
    }
    public function favourites(){
    	return $this->hasMany('App\Favourite');
    }

}
