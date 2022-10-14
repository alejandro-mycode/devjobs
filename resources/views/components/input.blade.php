@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md shadow-sm border-red-900 focus:border-red-700 focus:ring focus:ring-red-300 focus:ring-opacity-50']) !!}>
