<button {{ $attributes->merge(['type' => 'button', 'class' => 'btn btn-outline text-gray-100 hover:text-zinc-700 hover:bg-gray-100']) }}>
    {{ $slot }}
</button>
