@extends('layouts.app')

@section('content')
<div class="show-image">
<img class="single-image" src="{{ asset('images/'. $image->path) }}"> 
</div>
<form method="POST" action="/image/{{ $image->id }}" class="form-comment" >
{!! csrf_field() !!}
 <div class="form-group">
    <label for="comment">Comment:</label>
    <textarea name="text" class="form-control" id="comment" rows="1"></textarea>
    <button class="btn btn-primary" type="submit">Submit</button>
 </form>
 </div>
<div class="comments">
	@foreach($image->comments as $comment)
		<div class="panel panel-info">
		  <div class="panel-heading"><span>{{ $comment->user->name }}</span>{{ " posted on: ". $comment->created_at }}</div>
		  <div class="panel-body">
		    {{ $comment->text }}
		  </div>
		</div>
	@endforeach
</div>


@endsection