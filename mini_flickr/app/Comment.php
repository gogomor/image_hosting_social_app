<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function image(){
    	return $this->belongsTo('App\Image');
    }
    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function getcreated_atAttribute($value){
        return $value . "bla";
    }
}
