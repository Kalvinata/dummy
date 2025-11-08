@extends('layout.template')

@section('content')

<div class="row row-cols-1 row-cols-md-3 g-4">

    @forelse ($posts as $post)
    <div class="col">
        <div class="card h-100">
            <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}" style="height: 200px; object-fit: cover;">
            
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
            </div>

            <div class="card-footer bg-transparent border-top-0">
                <a href="/post/{{ $post->id }}" class="btn btn-primary btn-sm">Read More →</a>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12">
        <p class="text-center text-muted">Belum ada postingan.</p>
    </div>
    @endforelse

</div>

@endsection