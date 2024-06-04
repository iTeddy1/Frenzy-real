@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-text-normal']) }}>
    {{ $value ?? $slot }}
</label>
