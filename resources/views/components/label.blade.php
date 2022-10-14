@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-gray-700 uppercase mb2']) }}>
    {{ $value ?? $slot }}
</label>
