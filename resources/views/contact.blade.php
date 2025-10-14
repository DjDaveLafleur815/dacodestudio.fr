@extends('layouts.app')
@section('title', 'Contact')

@section('content')
    <h2>Contactez-moi</h2>

    @if(session('success'))
        <div class="alert success">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <label>Nom :</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name') <small>{{ $message }}</small> @enderror

        <label>Email :</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email') <small>{{ $message }}</small> @enderror

        <label>Message :</label>
        <textarea name="message" rows="6" required>{{ old('message') }}</textarea>
        @error('message') <small>{{ $message }}</small> @enderror

        <button type="submit" class="btn">Envoyer</button>
    </form>
@endsection
