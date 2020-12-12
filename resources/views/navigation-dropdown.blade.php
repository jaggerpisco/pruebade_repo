<aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>
        <!-- Navigation Links -->
        <ul class="mt-6">

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-igloo fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Dashboard') }}
                        </span>
                    </a>
                </x-nav-link>
                </a>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('products') }}" :active="request()->routeIs('products')">
                    <a href="{{ route('products') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-box-open fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Productos') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('workers') }}" :active="request()->routeIs('workers')">
                    <a href="{{ route('workers') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-people-carry fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Empleados') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>

            <div class="border-t border-gray-300 my-4 ml-5 mr-20"></div>

            <div class="block px-4 text-xs text-gray-400">
                {{ __('Administración') }}
            </div>


            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                    <a href="{{ route('users') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-user-friends fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Usuarios') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 ">
                <button class="focus:outline-none inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fas fa-store fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Próximos') }}
                        </span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <x-nav-link href="{{ route('vehiculos') }}" :active="request()->routeIs('vehiculos')">
                                <a href="{{ route('vehiculos') }}" class="w-full">
                                    {{ __('Control vehicular') }}
                                    </span>
                                </a>
                            </x-nav-link>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard') }}">
                                {{ __('Clientes') }}
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard') }}">
                                {{ __('Pagos del personal') }}
                            </a>
                        </li>
                    </ul>
                </template>
            </li>

        </ul>
    </div>
</aside>
<!-- Fin de la Navegaición para Computadoras o laptops -->

<div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>

<!-- Inicio de la Navegaición para dispositivos móviles -->
<aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden" x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150" x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu" @keydown.escape="closeSideMenu">
    <div class="py-4 text-gray-500 dark:text-gray-400">
        <a href="{{ route('dashboard') }}">
            <x-application-mark class="block h-9 w-auto" />
        </a>
        <ul class="mt-6">
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                    <a href="{{ route('dashboard') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-igloo fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Dashboard') }}
                        </span>
                    </a>
                </x-nav-link>
                </a>
            </li>
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('products') }}" :active="request()->routeIs('products')">
                    <a href="{{ route('products') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-box-open fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Productos') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>
            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('workers') }}" :active="request()->routeIs('workers')">
                    <a href="{{ route('workers') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-people-carry fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Empleados') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>

            <div class="border-t border-gray-300 my-4 ml-5 mr-20"></div>

            <div class="block px-4 text-xs text-gray-400">
                {{ __('Administración') }}
            </div>



            <li class="relative px-6 py-3">
                <x-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                    <a href="{{ route('users') }}" class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                        <i class="fas fa-user-friends fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Usuarios') }}
                        </span>
                    </a>
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 ">
                <button class="focus:outline-none inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="togglePagesMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <i class="fas fa-store fa-lg ml-1"></i>
                        <span class="ml-4">
                            {{ __('Próximos') }}
                        </span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isPagesMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner bg-gray-50 dark:text-gray-400 dark:bg-gray-900" aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <x-nav-link href="{{ route('vehiculos') }}" :active="request()->routeIs('vehiculos')">
                                <a href="{{ route('vehiculos') }}" class="w-full">
                                    {{ __('Control vehicular') }}
                                    </span>
                                </a>
                            </x-nav-link>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard') }}">
                                {{ __('Clientes') }}
                            </a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="{{ route('dashboard') }}">
                                {{ __('Pagos del personal') }}
                            </a>
                        </li>
                    </ul>
                </template>
            </li>


        </ul>
    </div>
</aside>
<!-- Fin de la Navegaición para dispositivos móviles -->