<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} — @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<header class="site-header">
    <div class="container">
        <a href="{{ route('main.home') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="D-A Code Studio" />
        </a>
        <nav class="nav">
            <a href="{{ route('main.home') }}">Accueil</a>
            <a href="{{ route('app.about') }}">À propos</a>
            <a href="{{ route('app.portfolio') }}">Portfolio</a>
            <a href="{{ route('contact.show') }}" class="btn">Contact</a>
        </nav>
    </div>
</header>

<main class="container">
    @yield('content')
</main>

<footer class="footer">
    <p>© {{ date('Y') }} D-A Code Studio — L’intelligence du bâtiment, propulsée par le code.</p>
</footer>
</body>
</html>
