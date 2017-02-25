@extends('layouts.app')

@section('content')
<div class="container">
    
      @foreach($images as $key => $image)
        {{-- Na samom pocetku, kao i pred svaku cetvrtu sliku dodaj nov row  --}}
        @if(($key % 3 == 0 || $key == 0))
        <div class="row">
        @endif
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <h5>{{ $image->user->name }}</h5>
              <img alt="img" src="{{ asset('images/'. $image->path) }}">
              <div class="caption">
                @if($image->name)
                <h3>{{ $image->name }}</h3>
                @endif
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>      
        </div>
        {{-- Posle svake trece slike zatvori row  --}}
        @if(($key+1)%3 == 0)
        </div>
        @endif
      @endforeach

    
</div>
<div class="pagi">
    {{ $images->links() }}
</div>

@endsection
