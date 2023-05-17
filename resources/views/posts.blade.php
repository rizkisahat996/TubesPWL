@extends('layouts.main')

@section('container')

    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
      <div class="col-md-6">
        {{-- <form action="/posts" method="GET"> --}}
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
          </div>
        {{-- </form> --}}
      </div>
    </div>



  @if ($posts->count())
    <div class="container">
      
      <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
              @else
              <img src="https://source.unsplash.com/500x400?" class="card-img-top">
              @endif
            <div class="card-body">
              <h5 class="card-title">{{ $post->title }}</h5>
              <p class="card-text">{!! $post->exert !!}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>  
    </div>

  @else
    <p class="text-center fs-4">No post found.</p>
  @endif

  <div class="d-flex justify-content-center">
    {{ $posts->links() }}
  </div>

  @endsection

