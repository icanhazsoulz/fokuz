@php
    $classes = 'rounded relative before:content-[""] before:absolute before:block  before:-top-10 before:z-0 before:bg-[#EDDEBA] before:rounded after:content-[""] after:absolute after:block after:w-2/3 after:bg-white after:z-10 after:rounded max-w-[713px]';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>

