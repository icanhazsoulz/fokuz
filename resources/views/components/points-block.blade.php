@php
    $classes = 'mt-24 mx-auto relative before:content-[""] before:absolute before:-top-14 before:-left-32 before:-right-32 before:h-36  before:bg-cover before:z-10 after:content-[""] after:absolute after:block after:h-80 after:top-20 after:-right-32 after:-left-32 after:z-10 after:rounded-lg';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</div>
