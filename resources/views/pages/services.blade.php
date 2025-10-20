@extends('layouts.app')

@section('title', 'Nos Services & Missions Freelance - D-A Code Studio')

@section('content')
    <div class="container py-5">
        {{-- Titre principal --}}
        <h1 class="text-center text-primary mb-4 fw-bold display-5">Nos Services & Tarifs</h1>
        <p class="text-center text-light mb-5 fs-5">
            <strong>D-A Code Studio</strong> est un studio indépendant spécialisé dans le
            <span class="text-primary fw-bold">Développement Web, Mobile et IoT</span>,
            avec une expertise en <span class="text-primary">domotique connectée</span>.
            <br>Nous créons des solutions performantes et sur mesure pour donner vie à vos projets numériques.
        </p>

        {{-- Liste dynamique des services --}}
        <div class="row g-4">
            @foreach($services as $service)
                <div class="col-md-4">
                    <div class="card bg-dark border border-primary shadow-sm h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4 class="card-title text-primary fw-bold mb-3">{{ $service->title }}</h4>
                                <p class="card-text text-light mb-3">{{ $service->description }}</p>

                                {{-- Tarif intégré directement dans la carte --}}
                                <p class="fw-bold text-primary fs-5 mb-4">
                                    💶 {{ $service->price }}
                                </p>
                            </div>
                            <a href="{{ route('quote.show') }}" class="btn btn-outline-primary w-100 mt-auto">Demander un devis</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- NOUVELLE SECTION : Nos Domaines d’Expertise --}}
        <section class="mt-5">
            <h2 class="text-center text-primary fw-bold mb-4 fs-3">💡 Nos Domaines d’Expertise</h2>
            <p class="text-center text-light mb-5 fs-5">
                D-A Code Studio regroupe trois pôles complémentaires pour répondre à tous vos besoins numériques :
                <br><strong>Développement Web, Mobile et IoT / Domotique.</strong>
            </p>

            <div class="row g-4">
                {{-- Web --}}
                <div class="col-md-4">
                    <div class="card bg-dark border border-primary shadow-sm h-100">
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold mb-3">🌐 Développement Web</h4>
                            <p class="text-light mb-3">
                                Conception de <strong>sites vitrines</strong>, plateformes sur mesure et applications interactives.
                                <br>Technos : Laravel, React, Next.js.
                            </p>
                            <p class="fw-bold text-primary fs-5">💶 À partir de 600 €</p>
                        </div>
                    </div>
                </div>

                {{-- Mobile --}}
                <div class="col-md-4">
                    <div class="card bg-dark border border-primary shadow-sm h-100">
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold mb-3">📱 Développement Mobile</h4>
                            <p class="text-light mb-3">
                                Création d’applications <strong>Android & iOS</strong> performantes et modernes.
                                <br>Technos : Flutter, React Native.
                            </p>
                            <p class="fw-bold text-primary fs-5">💶 À partir de 800 €</p>
                        </div>
                    </div>
                </div>

                {{-- IoT / Domotique --}}
                <div class="col-md-4">
                    <div class="card bg-dark border border-primary shadow-sm h-100">
                        <div class="card-body">
                            <h4 class="card-title text-primary fw-bold mb-3">🏠 IoT & Domotique Connectée</h4>
                            <p class="text-light mb-3">
                                Développement de systèmes <strong>connectés et automatisés</strong> pour bâtiments intelligents.
                                <br>Technos : FastAPI, Arduino, MQTT, Raspberry Pi.
                            </p>
                            <p class="fw-bold text-primary fs-5">💶 Sur devis</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Section Pourquoi nous choisir --}}
        <section class="mt-5">
            <h2 class="text-center text-primary fw-bold mb-4 fs-3">Pourquoi choisir D-A Code Studio ?</h2>
            <div class="row text-center g-4">
                <div class="col-md-3">
                    <div class="border border-primary rounded-4 p-4 h-100 bg-dark">
                        <h5 class="text-primary fw-bold mb-2">⚡ Expertise</h5>
                        <p class="text-light mb-0">Une maîtrise complète du développement Web, Mobile et IoT.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border border-primary rounded-4 p-4 h-100 bg-dark">
                        <h5 class="text-primary fw-bold mb-2">🎯 Sur mesure</h5>
                        <p class="text-light mb-0">Des solutions pensées pour vos besoins, vos objectifs et votre environnement.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border border-primary rounded-4 p-4 h-100 bg-dark">
                        <h5 class="text-primary fw-bold mb-2">🏠 Domotique</h5>
                        <p class="text-light mb-0">Spécialisation dans l’intégration et l’automatisation d’équipements connectés.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="border border-primary rounded-4 p-4 h-100 bg-dark">
                        <h5 class="text-primary fw-bold mb-2">🤝 Accompagnement</h5>
                        <p class="text-light mb-0">Un suivi complet : conseil, conception, développement et maintenance.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SECTION : Missions Freelance --}}
        <section class="mt-5">
            <h2 class="text-center text-primary fw-bold mb-4 fs-3">💼 Missions Freelance</h2>
            <p class="text-center text-light mb-5 fs-5">
                D-A Code Studio intervient également en <strong>freelance</strong> pour vos projets Web, Mobile et IoT.
                <br>Nous collaborons avec des entreprises et startups sur des missions ponctuelles ou à long terme.
            </p>

            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="border border-primary rounded-4 p-4 bg-dark h-100 shadow-sm">
                        <h5 class="text-primary fw-bold mb-2">🕓 Mission courte</h5>
                        <p class="text-light mb-2">Intervention rapide sur un besoin technique spécifique.</p>
                        <p class="fw-bold text-primary fs-5">💶 À partir de 250 €/jour</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="border border-primary rounded-4 p-4 bg-dark h-100 shadow-sm">
                        <h5 class="text-primary fw-bold mb-2">🚀 Projet complet</h5>
                        <p class="text-light mb-2">Conception, développement et mise en ligne d’une solution sur mesure.</p>
                        <p class="fw-bold text-primary fs-5">💶 Sur devis</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="border border-primary rounded-4 p-4 bg-dark h-100 shadow-sm">
                        <h5 class="text-primary fw-bold mb-2">🤝 Collaboration à distance</h5>
                        <p class="text-light mb-2">Mission freelance en télétravail ou hybride, avec reporting régulier.</p>
                        <p class="fw-bold text-primary fs-5">💶 300–350 € / jour</p>
                    </div>
                </div>
            </div>

            {{-- CTA freelance --}}
            <div class="text-center mt-5">
                <h3 class="fw-bold text-light mb-3">Un projet ou une mission à proposer ?</h3>
                <p class="mb-4 text-secondary fs-5">
                    Contactez-nous pour discuter de votre besoin et obtenir un devis personnalisé.
                </p>
                <a href="{{ route('quote.show') }}" class="btn btn-primary btn-lg">Proposer une mission</a>
            </div>
        </section>

        {{-- CTA principal final --}}
        <div class="text-center mt-5 border-top border-primary pt-4">
            <h3 class="fw-bold text-light mb-3">Un projet en tête ?</h3>
            <p class="mb-4 text-secondary fs-5">Demandez un devis personnalisé et transformez vos idées en solutions concrètes.</p>
            <a href="{{ route('quote.show') }}" class="btn btn-primary btn-lg">Demander un devis</a>
        </div>
    </div>

    {{-- Animation douce au survol --}}
    <style>
        .card, .border {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover, .border:hover {
            transform: translateY(-6px);
            box-shadow: 0 0 20px rgba(0,123,255,0.3);
        }
    </style>
@endsection
