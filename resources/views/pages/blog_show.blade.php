@extends('layouts.app')

@section('title', $post->title . ' - D-A Code Studio')

@section('content')
    <div class="container py-5">
        <h1 class="text-primary fw-bold mb-3">{{ $post->title }}</h1>
        <p class="text-secondary">Publié le {{ $post->published_at->format('d/m/Y') }} — Par {{ $post->author }}</p>

        @if($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        @endif

        <div class="text-light">
            {!! $post->content !!}
        </div>

        <div class="mt-5">
            <a href="{{ route('blog') }}" class="btn btn-outline-primary">← Retour au blog</a>
        </div>
    </div>
@endsection
