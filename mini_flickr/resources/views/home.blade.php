@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4">
      
        @foreach($images as $image)

          <div class="thumbnail">
            <img alt="img" src="{{ asset('images/'. $image->path) }}">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>...</p>
              <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
            </div>
          </div>

        @endforeach
      </div>
    </div>
</div>
@endsection
