@extends('layouts.app')

@section('title', 'Demande de devis - D-A Code Studio')

@section('content')
    <div class="container py-5">
        <h1 class="text-center text-primary mb-4 fw-bold">Demander un devis</h1>

        @if(session('success'))
            <div class="alert alert-success text-center">{{ session('success') }}</div>
        @endif

        <form action="{{ route('quote.submit') }}" method="POST" class="mx-auto" style="max-width:700px;">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label text-light">Nom complet</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-light">Adresse e-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="project_type" class="form-label text-light">Type de projet</label>
                <select name="project_type" id="project_type" class="form-select" required>
                    <option value="">-- Sélectionnez un type --</option>
                    <option value="Développement Web">🌐 Développement Web</option>
                    <option value="Développement Mobile">📱 Développement Mobile</option>
                    <option value="IoT / Domotique">🏠 IoT / Domotique</option>
                    <option value="Autre">🔧 Autre</option>
                </select>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="budget" class="form-label text-light">Budget estimé</label>
                    <input type="text" name="budget" id="budget" class="form-control" placeholder="Ex: 1000 € - 2000 €">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="deadline" class="form-label text-light">Délai souhaité</label>
                    <input type="text" name="deadline" id="deadline" class="form-control" placeholder="Ex: 1 à 2 mois">
                </div>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label text-light">Description du projet</label>
                <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary w-100">Envoyer la demande</button>
        </form>
    </div>
@endsection
