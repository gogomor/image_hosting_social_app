@extends('layouts.app')

@section('content')
<div class="show-image">
<img class="single-image" src="{{ asset('images/'. $image->path) }}"> 
</div>

<div class="comments">
	@foreach($image->comments as $comment)
		<div class="panel panel-info">
		  <div class="panel-heading">{{ $comment->user->name }}</div>
		  <div class="panel-body">
		    {{ $comment->text }}
		  </div>
		</div>
	@endforeach
</div>


@endsection