<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class ImagesController extends Controller
{
    public function show(Image $image){
    	//broj pregleda se poveca za 1 i sacuva se u bazi
    	$image->num_views = $image->num_views + 1;
    	$image->save();
    	//komentari slike se vezuju za sliku i u svakom kometaru je objekat korisnika koji ga je napisao
    	$image->load('comments.user');
    	return view('image',compact('image'));
    }
    public function store_comment(Request $request, Image $image) {
    	$comment = new Comment;
    	$comment->text = $request->text;
    	$comment->user_id = Auth::id();
    	
    	$image->comments()->save($comment);
    	return back();

    }
}
