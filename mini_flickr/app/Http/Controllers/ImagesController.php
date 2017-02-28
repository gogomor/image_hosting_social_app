<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Comment;

class ImagesController extends Controller
{
    public function show(Image $image){
    	$image->load('comments.user');
    	return view('image',compact('image'));
    }
}
