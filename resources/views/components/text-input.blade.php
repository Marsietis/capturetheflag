@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-zinc-900 dark:bg-zinc-800 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-red-500 focus:ring-indigo-500 dark:focus:ring-red-500 rounded-md shadow-sm']) !!}>
