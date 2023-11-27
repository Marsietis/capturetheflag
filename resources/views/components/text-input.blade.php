@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-zinc-900 bg-zinc-800 text-gray-300 focus:border-red-500 focus:ring-red-500 rounded-md shadow-sm']) !!}>
