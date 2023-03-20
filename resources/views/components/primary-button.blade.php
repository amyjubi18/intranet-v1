<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-fit block bg-blue-900 hover:bg-blue-800 px-4 py-3 mt-4 mr-1 rounded-lg font-semibold text-white focus:bg-blue-400 focus:outline-none']) }}>
    {{ $slot }}
</button>
