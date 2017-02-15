<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function images(){
    	return $this->belongsToMany('App\Image', 'album_image', 'album_id', 'image_id');
    }
}
