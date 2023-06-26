<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-zinc-800 border border-red-400 rounded-md font-semibold text-xs text-white dark:text-white uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-red-400 focus:bg-gray-700 dark:focus:bg-red-400 active:bg-gray-900 dark:active:bg-red-400 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-red-500 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
