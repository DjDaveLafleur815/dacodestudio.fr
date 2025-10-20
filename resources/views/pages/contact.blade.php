@extends('layouts.app')

@section('title', 'Contact - D-A Code Studio')

@section('content')
    <h1 class="text-center text-primary mb-5 fw-bold">Nous contacter</h1>

    @if(session('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" class="mx-auto" style="max-width: 600px;">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nom complet</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Adresse e-mail</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary w-100">Envoyer</button>
    </form>
@endsection
