@extends('layouts.app')

@section('title', $post->title . ' - Blog D-A Code Studio')

@section('content')
    <div class="container py-5">
        <h1 class="text-primary fw-bold mb-4">{{ $post->title }}</h1>

        @if($post->image)
            <img src="{{ asset($post->image) }}" alt="{{ $post->title }}" class="img-fluid mb-4 rounded border border-primary">
        @endif

        <div class="text-light" style="white-space: pre-line;">
            {!! nl2br(e($post->content)) !!}
        </div>

        <a href="{{ route('blog') }}" class="btn btn-outline-primary mt-4">← Retour au blog</a>
    </div>
@endsection
