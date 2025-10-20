@extends('layouts.app')

@section('title', 'Portfolio - D-A Code Studio')

@section('content')
    <div class="container py-5">
        {{-- Titre principal --}}
        <h1 class="text-center text-primary mb-4 fw-bold display-5">Nos Réalisations & Démonstrations</h1>
        <p class="text-center text-light mb-5 fs-5">
            Découvrez un aperçu des projets types conçus par <strong>D-A Code Studio</strong> :
            <span class="text-primary">Web, Mobile et IoT</span>.
            Ces prototypes illustrent notre savoir-faire et la diversité des solutions que nous proposons.
        </p>

        <div class="row g-4">
            {{-- Projet Web --}}
            <div class="col-md-4">
                <div class="card bg-dark border border-primary shadow-sm h-100">
                    <img src="{{ asset('images/portfolio-web.png') }}" class="card-img-top border-bottom border-primary" alt="Site vitrine professionnel">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold mb-3">🌐 Site Vitrine Professionnel</h4>
                        <p class="card-text text-light mb-3">
                            Un site web moderne et responsive destiné aux entreprises souhaitant renforcer leur visibilité.
                        </p>
                        <p class="text-light small mb-3">
                            <strong>Technologies :</strong> Laravel, Blade, Bootstrap, MySQL
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Voir le projet</a>
                    </div>
                </div>
            </div>

            {{-- Projet Mobile --}}
            <div class="col-md-4">
                <div class="card bg-dark border border-primary shadow-sm h-100">
                    <img src="{{ asset('images/portfolio-mobile.png') }}" class="card-img-top border-bottom border-primary" alt="Application mobile TaskFlow">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold mb-3">📱 Application Mobile “TaskFlow”</h4>
                        <p class="card-text text-light mb-3">
                            Une application intuitive pour gérer ses tâches et ses projets, disponible sur Android et iOS.
                        </p>
                        <p class="text-light small mb-3">
                            <strong>Technologies :</strong> Flutter, Firebase, Dart
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Voir le projet</a>
                    </div>
                </div>
            </div>

            {{-- Projet IoT --}}
            <div class="col-md-4">
                <div class="card bg-dark border border-primary shadow-sm h-100">
                    <img src="{{ asset('images/portfolio-iot.png') }}" class="card-img-top border-bottom border-primary" alt="Interface de pilotage SmartControl">
                    <div class="card-body d-flex flex-column">
                        <h4 class="card-title text-primary fw-bold mb-3">🏠 Domotique “SmartControl”</h4>
                        <p class="card-text text-light mb-3">
                            Une interface web et mobile pour contrôler l’éclairage, la température et la sécurité d’un bâtiment connecté.
                        </p>
                        <p class="text-light small mb-3">
                            <strong>Technologies :</strong> FastAPI, React, MQTT, Raspberry Pi
                        </p>
                        <a href="#" class="btn btn-outline-primary mt-auto">Voir le projet</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- CTA final --}}
        <div class="text-center mt-5 border-top border-primary pt-4">
            <h3 class="fw-bold text-light mb-3">Envie d’un projet similaire ?</h3>
            <p class="mb-4 text-secondary fs-5">
                Contactez-nous pour concevoir ensemble votre site, application ou système connecté sur mesure.
            </p>
            <a href="{{ route('quote.show') }}" class="btn btn-primary btn-lg">Demander un devis</a>
        </div>
    </div>

    {{-- Animation douce --}}
    <style>
        .card, .border {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover, .border:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 20px rgba(0,123,255,0.3);
        }
        .card-img-top {
            object-fit: cover;
            height: 180px;
        }
    </style>
@endsection
