@extends('layouts.app')

@section('title', 'À propos - D-A Code Studio')

@section('content')
    <div class="container py-5">

        <h1 class="text-center text-primary fw-bold mb-5 display-5">À propos de D-A Code Studio</h1>

        {{-- Mission --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">🚀 Notre mission</h2>
            <p>Fondé par un passionné du numérique et de la technologie, <strong>D-A Code Studio</strong> est un studio indépendant de <strong>Développement Web, Mobile & IoT</strong>, spécialisé dans la <strong>domotique intelligente</strong> et les solutions connectées sur mesure.
            </p>
            <p>Notre mission : <strong>rendre les bâtiments plus autonomes grâce au code</strong>.
                Nous concevons des outils qui facilitent le quotidien, optimisent les performances et connectent le monde réel à l’univers digital.
            </p>
        </section>

        {{-- Vision --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">🧭 Notre vision</h2>
            <p>
                Chez D-A Code Studio, nous considérons le code comme bien plus qu’une compétence technique :
                c’est un <strong>vecteur d’innovation, d’efficacité et de durabilité</strong>.
            </p>
            <ul>
                <li>Sites et applications sur mesure</li>
                <li>Plateformes de gestion centralisée</li>
                <li>Systèmes domotiques et IoT personnalisés</li>
            </ul>
            <p>
                Notre ambition : proposer des technologies <strong>utiles, accessibles et évolutives</strong>,
                pensées pour répondre aux besoins réels des utilisateurs.
            </p>
        </section>

        {{-- Expertise --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">💼 Nos domaines d’expertise</h2>
            <div class="row g-4">
                @php
                    $domains = [
                        ['🌐', 'Développement Web', 'Sites vitrines, plateformes professionnelles et solutions métiers performantes (Laravel, React, Next.js).'],
                        ['📱', 'Développement Mobile', 'Applications hybrides et natives Android/iOS (Flutter, React Native, Expo).'],
                        ['🏠', 'IoT & Domotique', 'Systèmes connectés pour la gestion intelligente de l’éclairage, du chauffage et de la sécurité.'],
                        ['⚙️', 'Solutions API & Back-end', 'Développement d’API sécurisées, dashboards et outils d’administration performants.']
                    ];
                @endphp
                @foreach($domains as [$icon, $title, $desc])
                    <div class="col-md-6">
                        <div class="card bg-dark border border-primary shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="text-primary fw-bold">{{ $icon }} {{ $title }}</h5>
                                <p class="mb-0">{{ $desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Valeurs --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">🤝 Nos valeurs</h2>
            <div class="row g-3">
                @php
                    $values = [
                        ['Innovation', 'Repousser les limites du numérique pour créer des expériences uniques.'],
                        ['Qualité', 'Des projets conçus avec soin et exigence technique.'],
                        ['Transparence', 'Une communication claire et une collaboration fondée sur la confiance.'],
                        ['Accessibilité', 'Des solutions intuitives et inclusives, adaptées à tous.']
                    ];
                @endphp
                @foreach($values as [$key, $desc])
                    <div class="col-md-6">
                        <div class="border border-primary rounded-4 p-4 h-100 bg-dark">
                            <h5 class="text-primary fw-bold">{{ $key }}</h5>
                            <p class="text-light mb-0">{{ $desc }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>

        {{-- Technologies --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">🛠️ Technologies principales</h2>
            <ul class="list-unstyled">
                <li><strong>Langages & Frameworks :</strong> Laravel · Symfony · React · Next.js · Flutter · FastAPI · Django · PHP · JavaScript · Python</li>
                <li><strong>Outils & Environnements :</strong> MySQL · Docker · GitHub · Apache2 · Raspberry Pi · Arduino</li>
                <li><strong>Spécialisations :</strong> IoT, domotique, automatisation, intégration API, développement multiplateforme</li>
            </ul>
        </section>

        {{-- Vision régionale --}}
        <section class="mb-5">
            <h2 class="text-primary fw-semibold mb-3 fs-3">🌍 Une vision régionale et humaine</h2>
            <p>
                Basé en <strong>Bourgogne–Franche-Comté</strong>, D-A Code Studio s’inscrit dans une démarche locale et responsable.
                Nous croyons à un numérique <strong>proche des utilisateurs</strong>, ancré dans la réalité des territoires et tourné vers l’avenir.
            </p>

            <blockquote class="blockquote border-start border-primary ps-3 py-3 bg-dark bg-opacity-50 rounded">
                <p class="fs-5 fst-italic mb-1">« L’intelligence du bâtiment, propulsée par le code. »</p><br>
                <footer class="blockquote-footer text-secondary">Notre slogan incarne notre ambition : connecter le code au monde réel.</footer>
            </blockquote>
        </section>

        {{-- Contact --}}
        <section class="text-center py-4 border-top border-primary">
            <h2 class="text-primary fw-semibold mb-4 fs-3">📫 Nous contacter</h2>
            <p><strong>Email :</strong> <a href="mailto:contact@dacodestudio.fr" class="text-primary">contact@dacodestudio.fr</a></p>
            <p><strong>Site web :</strong> <a href="https://dacodestudio.fr" target="_blank" class="text-primary">dacodestudio.fr</a></p>
            <p><strong>LinkedIn :</strong> <a href="https://www.linkedin.com/in/david-antoine-73a038270" target="_blank" class="text-primary">D-A Code Studio</a></p>
            <p><strong>Région :</strong> Bourgogne–Franche-Comté (France)</p>
        </section>
    </div>

    {{-- Petit effet d’apparition douce --}}
    <style>
        section {
            animation: fadeIn 0.7s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
@endsection
