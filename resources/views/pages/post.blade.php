@extends('layouts.app')

@section('title', $post->title . ' - D-A Code Studio')

@section('content')
    <article class="mx-auto" style="max-width: 800px;">
        <h1 class="text-primary fw-bold mb-3">{{ $post->title }}</h1>
        <p class="text-secondary small mb-4">{{ $post->created_at->format('d M Y') }}</p>
        @if($post->image)
            <img src="{{ asset($post->image) }}" class="img-fluid rounded mb-4" alt="{{ $post->title }}">
        @endif
        <div class="text-light fs-5">
            {!! nl2br(e($post->content)) !!}
        </div>
    </article>
@endsection
