@extends('layouts.app')

@section('content')
<div class="container-fluid">
    
      @foreach($images as $key => $image)
        {{-- Na samom pocetku, kao i pred svaku cetvrtu sliku dodaj nov row  --}}
        @if(($key % 3 == 0 || $key == 0))
        <div class="row">
        @endif
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <h5>{{ $image->user->name }}</h5>
            <a href="{{'/image/' . $image->id}}"><img alt="img" src="{{ asset('images/'. $image->path) }}"></a>
              <div class="caption">
                @if($image->name)
                <h3>{{ $image->name }}</h3>               
                @endif
                <img class="ico star" src="/images/other/star.png">
                <img class="ico comment" src="/images/other/comment.png">
                <div class="image-info">
                  <span>99+ faves</span>
                  <span>99+ views</span>
                  <span>1000 comments</span>
                </div>               
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
