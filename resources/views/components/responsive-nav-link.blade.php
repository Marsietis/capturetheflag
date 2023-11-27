@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block w-full pl-3 pr-4 py-2 border-l-4 border-red-500 text-left text-base font-medium text-white bg-zinc-800 focus:outline-none focus:text-indigo-200 focus:bg-red-400 focus:border-indigo-300 transition duration-150 ease-in-out'
            : 'block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-400 hover:text-gray-200 hover:bg-zinc-800 hover:border-red-400 focus:outline-none focus:text-gray-200 focus:bg-red-400 focus:border-red-500 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
