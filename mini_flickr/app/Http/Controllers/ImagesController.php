<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImagesController extends Controller
{
    public function show(Image $image){
    	return view('image',compact('image'));
    }
}
