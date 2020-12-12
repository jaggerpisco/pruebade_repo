<x-guest-layout>
    <x-authentication-card>

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <!-- Logo de la empresa -->
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <!-- Título del formulario -->
        <h1 class="mb-8 text-center text-xl font-semibold text-gray-800 dark:text-gray-200">
            Inicio de sesión
        </h1>

        <!-- Mensaje de error -->
        <x-validation-errors class="mb-4" />

        <!-- Inicio del Fomrulario -->
        <form class="" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Correo Electrónico -->
            <div class="block text-sm">
                <x-label for="email" value="{{ __('Correo Electrónico') }}" />
                <x-input id="email" type="email" name="email" placeholder="Escriba su correo" :value="old('email')" required autofocus />
            </div>

            <!-- Contraseña -->
            <div class="block text-sm mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" type="password" name="password" placeholder="***************" required autocomplete="current-password" />
            </div>

            <!-- Recuérdame -->
            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <input id="remember_me" type="checkbox" class="form-checkbox text-indigo-600 focus:border-indigo-400 focus:outline-none focus:shadow-outline-indigo " name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                </label>
            </div>

            <!-- Botón de entrar -->
            <div class="flex items-center justify-center ">
                <x-button class="flex justify-center">
                    {{ __('Entrar') }}
                </x-button>
            </div>

            <!-- Píe del formulario -->
            <div class="hidden md:flex  mt-6  items-center justify-between">
                <span class="border-b border-gray-400 w-1/5 md:w-1/0"></span>
                <p class="text-xs font-mono text-gray-500 text-center">HCS Perú Web System © 2020</p>
                <span class="border-b border-gray-400 w-1/5 md:w-1/0"></span>
            </div>


        </form>
        <!-- Fin del Fomrulario -->

    </x-authentication-card>
</x-guest-layout>