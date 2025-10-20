<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'D-A Code Studio')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Police Google --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    {{-- Favicon --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

    {{-- Style custom --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="bg-dark text-light" style="font-family: 'Poppins', sans-serif;">
{{-- HEADER --}}
@include('partials.header')

<main class="container py-5">
    @yield('content')
</main>

{{-- FOOTER --}}
@include('partials.footer')

{{-- Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
