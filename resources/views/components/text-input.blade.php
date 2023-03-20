@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300
 focus:outline-none focus:border-blue-700 focus:ring-3 focus:ring-blue-700 rounded-lg']) !!}>
