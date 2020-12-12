<button {{ $attributes->merge(['type' => 'submit', 'class' => 'block w-64 px-4 py-2 mt-8 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-indigo-600 border border-transparent rounded-lg active:bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:shadow-outline-indigo']) }}>
    {{ $slot }}
</button>
