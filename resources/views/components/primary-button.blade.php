<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full bg-blue-800 hover:bg-blue-900 text-white font-semibold py-2 rounded-md transition-all select-none']) }}>
    {{ $slot }}
</button>
