@extends('layouts.app')

@section('title', 'Blog - D-A Code Studio')

@section('content')
    <h1 class="text-center text-primary mb-5 fw-bold">Actualités & Articles</h1>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card bg-dark border border-primary h-100">
                    @if($post->image)
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline-primary btn-sm">Lire plus</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
