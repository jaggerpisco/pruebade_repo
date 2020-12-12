<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <!-- Icons -->
    <script src="https://kit.fontawesome.com/ae3fbbfc48.js" crossorigin="anonymous"></script>


    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
    <script src="{{ asset('js/init-alpine.js') }}"></script>
    <script src="{{ asset('js/focus-trap.js') }}"></script>

    <!-- Scripts Dashboard -->
    

</head>

<body>

    <div class="flex h-screen bg-purple-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">

        @livewire('navigation-dropdown')

        <div class="flex flex-col flex-1 w-full">

            <livewire:navigation-up></livewire:navigation-up>

            <main class="h-full overflow-y-auto">

                <div class="container px-6 mx-auto grid">

                    {{$header}}

                    {{ $slot }}

                </div>

            </main>

        </div>

    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>