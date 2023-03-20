@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-gray-700 focus:outline-none focus:ring-sky-500 focus:ring-1 focus:ring-sky-500']) }}>
    {{ $value ?? $slot }}
</label>
