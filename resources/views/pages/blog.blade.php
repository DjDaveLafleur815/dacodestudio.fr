@extends('layouts.app')

@section('title', 'Blog - D-A Code Studio')

@section('content')
    <div class="container py-5">
        <h1 class="text-center text-primary fw-bold mb-5">Actualités & Articles</h1>

        <div class="row g-4">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card bg-dark border border-primary h-100 shadow-sm">
                        @if($post->image)
                            <img src="{{ asset($post->image) }}" class="card-img-top border-bottom border-primary" alt="{{ $post->title }}">
                        @endif
                        <div class="card-body">
                            <h4 class="text-primary fw-bold">{{ $post->title }}</h4>
                            <p class="text-light">{{ Str::limit($post->excerpt, 100) }}</p>
                            <a href="{{ route('blog.show', $post->slug) }}" class="btn btn-outline-primary w-100">Lire l'article</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
