@extends('layouts.app')

@section('content')
<div class="show-image">
<img class="single-image" src="{{ asset('images/'. $image->path) }}"> 
</div>


@endsection