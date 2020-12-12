<div class="flex flex-col overflow-y-auto md:flex-row">

    <!-- Lado IZQUIERDO del card con imagen -->
    <div class="h-32 md:h-auto md:w-1/2 hidden md:flex">
        <img aria-hidden="true" class="object-cover w-full h-full " src="{{ asset('img/login-1.jpg') }}" alt="Office" />
    </div>

    <!-- Lado DERECHO del card con el formulario -->
    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
        <div class="w-full ">
            {{ $logo }}
            {{ $slot }}
        </div>
    </div>

</div>

<!-- aria-hidden="true" -->