@extends('layouts.app')

@section('title', 'Accueil - D-A Code Studio')

@section('content')
    <div class="container text-center py-5">

        {{-- Logo + slogan principal --}}
        <img src="{{ asset('images/logo.png') }}" alt="Logo D-A Code Studio" class="mb-4" width="130">

        <h1 class="fw-bold text-primary mb-3">L’intelligence du bâtiment, propulsée par le code.</h1>
        <p class="lead mb-4 text-light">
            Développement Web, Mobile et IoT pour les professionnels.<br>
            Nous concevons des solutions sur mesure pour connecter vos espaces et vos idées.
        </p>

        {{-- Bouton principal --}}
        <a href="{{ route('quote.show') }}" class="btn btn-primary btn-lg px-4">Demander un devis</a>

        {{-- Séparation élégante --}}
        <hr class="my-5 text-secondary" style="opacity:0.2;">

        {{-- 3 domaines d’expertise --}}
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="p-4 border border-primary rounded-4 bg-dark h-100 shadow-sm">
                    <h3 class="text-primary mb-3">🌐 Web</h3>
                    <p class="text-light mb-0">Sites, applications et plateformes professionnelles sur mesure et responsives.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border border-primary rounded-4 bg-dark h-100 shadow-sm">
                    <h3 class="text-primary mb-3">📱 Mobile</h3>
                    <p class="text-light mb-0">Applications Android et iOS performantes, modernes et intuitives.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="p-4 border border-primary rounded-4 bg-dark h-100 shadow-sm">
                    <h3 class="text-primary mb-3">🏠 IoT / Domotique</h3>
                    <p class="text-light mb-0">Systèmes connectés, tableaux de bord et automatisations intelligentes.</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Style local pour effets doux --}}
    <style>
        .border, .btn {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .border:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 20px rgba(0,123,255,0.25);
        }
        .btn:hover {
            box-shadow: 0 0 20px rgba(0,123,255,0.4);
            transform: translateY(-2px);
        }
    </style>
@endsection
