@extends('layouts.app')
@section('title', 'Accueil')

@section('content')
    <section class="hero">
        <h1>D-A Code Studio</h1>
        <p>Développement Web, Mobile & IoT — Domotique sur mesure</p>
        <p class="tagline">« L’intelligence du bâtiment, propulsée par le code »</p>
        <a href="{{ route('app.portfolio') }}" class="btn">Voir mes projets</a>
    </section>
@endsection
