@extends('layout.template')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                        <div class="card-body">
                            <h2>{{ $post->title }}</h2>
                            <p>{{ $post->content }}</p>
                            <a href="/post/{{ $post->id }}">Read More...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
