@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 underline decoration-2 decoration-indigo-500 underline-offset-8 focus:outline-none transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:underline decoration-2 decoration-gray-300 underline-offset-8 focus:outline-none focus:text-gray-700 transition duration-150 ease-in-out';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
