<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-primary">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" class="me-2">D-A Code Studio
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('app.portfolio') }}">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">À propos</a></li>
        <li class="nav-item"><a class="nav-link text-primary fw-bold" href="{{ route('quote.show') }}">Demande de devis</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('contact.show') }}">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>
