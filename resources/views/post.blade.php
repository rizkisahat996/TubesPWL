@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid">
                    </div>
                @else
                <img src="https://source.unsplash.com/1200x400?" class="img-fluid">
                @endif
                
                
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                
                
                <a href="/posts" class="d-block mt-3">Back to Post</a>
            </div>
        </div>
    </div>


    
@endsection

