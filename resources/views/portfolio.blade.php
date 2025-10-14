@extends('layouts.app')
@section('title', 'Portfolio')

@section('content')
    <h2>Projets récents</h2>
    <div class="grid">
        @foreach($projects as $p)
            <div class="card">
                <img src="{{ $p->image }}" alt="{{ $p->title }}">
                <h3>{{ $p->title }}</h3>
                <p>{{ $p->description }}</p>
                @if($p->link)
                    <a href="{{ $p->link }}" target="_blank">Voir le projet</a>
                @endif
            </div>
        @endforeach
    </div>
@endsection
