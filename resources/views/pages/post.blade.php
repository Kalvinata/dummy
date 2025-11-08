@extends('layout.template')

@section('title', $post->title)

@section('content')
    <div class="container mt-5">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        
        <!-- Foto Coding -->
        <div class="mt-4 mb-4">
            <img src="{{ asset('asstes/images/epep.jpg') }}" class="img-fluid rounded" alt="Coding Photo" style="max-width: 100%; height: auto;">
        </div>
        
        <a href="/">← kembali</a>
    </div>
@endsection
