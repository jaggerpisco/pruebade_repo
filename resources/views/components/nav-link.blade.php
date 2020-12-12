@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-gray-800 absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg '
            : '';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

