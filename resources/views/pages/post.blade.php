@extends('layout.template')

@section('title', $post->title)

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-lg border-0 mb-4">
                <img src="{{ $post->image_url }}" 
                     class="card-img-top" 
                     alt="{{ $post->title }}"
                     style="max-height: 400px; object-fit: cover;">

                <div class="card-body">
                    <h1 class="card-title">{{ $post->title }}</h1>
                    <p class="card-text mt-3">{{ $post->content }}</p>

                    <a href="/" class="btn btn-outline-primary mt-3">← Kembali ke Home</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection