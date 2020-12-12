<div class="container">
    <x-slot name="header">
        <div class="flex">
            <div class="flex-1">
                <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                    {{ __('Empleados') }}
                </h2>
            </div>
            <!-- <div class="items-end justify-end sm:items-center sm:justify-items-center">
                <div class="m-5">
                    <button wire:click="restore" @click="openModal" class="focus:outline-none bg-green-100 text-green-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-4 inline-flex items-center">
                        <i class="fas fa-user-plus"></i>
                        <span class="pl-2 mr-2 hidden sm:flex">Agregar</span>
                    </button>
                </div>
            </div> -->
        </div>
    </x-slot>


    <!-- Modal -->
    <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" class="fixed inset-0 z-30 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center">
        <!-- Modal -->
        <div x-show="isModalOpen" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 transform translate-y-1/2" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0  transform translate-y-1/2" @click.away="closeModal" @keydown.escape="closeModal" class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl" role="dialog" id="modal">
            <!-- Remove header if you don't want a close icon. Use modal body to place modal tile. -->
            <header class="flex justify-end">
                <button class="inline-flex items-center focus:outline-none justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700" aria-label="close" @click="closeModal">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                </button>
            </header>
            <!-- Modal body -->
            <div class="mt-4 mb-6">
                <!-- Modal title -->
                <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                    Agregar empleados
                </p>
                <!-- Modal cuerpo -->
                <div class="px-4 py-5 bg-white ">
                    <div class="grid grid-cols-12 gap-4">

                        <div class="col-span-6 sm:col-span-4">
                            <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Nombres</label>
                            <input wire:model="work_name" id="first_name" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                            @error('work_name') <span>{{$message}}</span> @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Ape. Paterno</label>
                            <input wire:model="work_ape_paterno" id="lastname" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label for="lastname" class="block text-sm font-medium leading-5 text-gray-700">Ape. Materno</label>
                            <input wire:model="work_ape_materno" id="lastname" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label for="id" class="block text-sm font-medium leading-5 text-gray-700">Doc. de Identidad</label>
                            <input wire:model="work_doc_identidad" id="id" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label for="text" class="block text-sm font-medium leading-5 text-gray-700">Puesto de Trabajo</label>
                            <select wire:model="job_id" id="id" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="" > -- Escoger -- </option>
                                @foreach($jobs as $trabajos)
                                @if ($action == "submit")
                                <option value="{{ $trabajos->id}}" >{{ $trabajos->nombre}}</option>
                                @elseif ($action == "update")
                                <option value="{{ $trabajos->id}}" >{{ $trabajos->nombre}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label for="cellphone" class="block text-sm font-medium leading-5 text-gray-700">Celular</label>
                            <input wire:model="work_celular" id="cellphone" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Correo</label>
                            <input wire:model="work_correo" id="email" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>

                        <div class="col-span-6 sm:col-span-6">
                            <label for="address" class="block text-sm font-medium leading-5 text-gray-700">Dirección</label>
                            <input wire:model="work_direccion" id="address" class="mt-1 form-input block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal footer -->
            <footer class="flex flex-col items-center justify-end px-6 py-3 -mx-6 -mb-4 space-y-4 sm:space-y-0 sm:space-x-6 sm:flex-row bg-gray-50 dark:bg-gray-800">
                <button wire:click="restore" @click="closeModal" class="hidden sm:flex w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                    Cancelar
                </button>
                @if ($action == "submit")
                <button wire:click="submit" @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Guardar
                </button>
                @else
                <button wire:click="update" @click="closeModal" class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                    Actualizar
                </button>
                @endif
            </footer>
        </div>
    </div>

    <!-- Search input -->
    <div class="flex justify-center flex-1 p-4">

        <div class="inline-flex relative w-full max-w-xl mr-6 focus-within:text-purple-500">

            <div class="absolute inset-y-0 flex items-center pl-2 text-gray-500 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700">
                <i class="fas fa-search "></i>
            </div>

            <did class="hidden">
                {{ $search }}
            </did>

            <input wire:model="search" class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-white border-1 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input" type="text" placeholder="Buscar datos del empleado.." aria-label="Search" />

            @if($search !== '')
            <button wire:click="equis" class="absolute inset-y-0 right-0 mx-2 justify-center focus:outline-none text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700">
                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                    <path d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </button>
            @endif

        </div>
        <div class="items-end justify-end">
            <button  @click="openModal" class="focus:outline-none bg-green-100 text-green-800 font-bold rounded border-b-2 border-green-500 hover:border-green-600 hover:bg-green-500 hover:text-white shadow-md py-2 px-4 inline-flex items-center">
                <i class="fas fa-user-plus"></i>
                <span class="pl-2 mr-2 hidden sm:flex">Agregar</span>
            </button>
        </div>
    </div>

    <!-- Table -->
    <div class="container grid mx-auto">
        @if($workers->count())
        <div class="w-full mb-8 mt-9 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Nombres y Apellidos</th>
                            <th class="px-4 py-3">Identificación</th>
                            <th class="px-4 py-3">Puesto</th>
                            <th class="px-4 py-3">Celular</th>
                            <th class="px-4 py-3">Correo</th>
                            <th class="px-4 py-3">Dirección</th>
                            <th class="px-4 py-3">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($workers as $post)
                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3">
                                <div class="flex items-center text-sm">
                                    <!-- Avatar with inset shadow -->
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                        <img class="object-cover w-full h-full rounded-full" src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ" alt="" loading="lazy" />
                                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                    </div>
                                    <div>
                                        <p class="font-semibold">{{ $post->work_name }}</p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            {{ $post->work_ape_paterno }}&nbsp;{{ $post->work_ape_materno }}
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="font-semibold">{{ $post->work_doc_identidad }} </p>
                                        <p class="text-xs text-gray-600 dark:text-gray-400">
                                            DNI
                                        </p>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $post->job->nombre }}
                            </td>

                            <td class="px-4 py-3 text-sm">
                                {{ $post->work_celular}}
                            </td>

                            <td class="px-4 py-3 text-sm">
                                <div class="flex items-center text-sm">
                                    <div>
                                        <p class="">{{ $post->work_correo }} </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $post->work_direccion}}
                            </td>
                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <button wire:click="edit({{ $post }})" @click="openModal" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                            </path>
                                        </svg>
                                    </button>
                                    <button wire:click="destroy({{ $post->id }})" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{ $workers->links() }}
            </div>
        </div>
        @else
        <div class="bg-white px-4 py-3 border-t flex justify-center border-gray-200 sm:px-6">
            No hay resultados para la búsqueda "{{$search}}"
        </div>
        @endif
    </div>

</div>