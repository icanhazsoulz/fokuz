@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-sans font-light text-2xl text-primary-focused mb-2']) }}>
    {{ $value ?? $slot }}
</label>
