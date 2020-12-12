<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Descripción del sistema web -->
    <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">
    <meta property="og:image" content="{{ asset('img/new-logo-hcsperu.png') }}">
    <meta name="description" content="Sistema web basado en el Framework Laravel - Perú 2020">
    <meta name="author" content="C. Jagger Pisco Flores" />

    <!-- Título de la página -->
    <title>{{ 'HCS Perú Web System ©' }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>

<body class="bg-white md:bg-gray-100">
    <div class="flex items-center min-h-screen md:p-6">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white md:rounded-lg md:shadow-xl dark:bg-gray-800">
            {{ $slot }}
        </div>
    </div>
</body>

</html>