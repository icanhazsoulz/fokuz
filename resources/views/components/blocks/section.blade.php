@php
    $classes = 'relative';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] px-0 mx-auto">
        {{ $slot }}
    </div>
</section>
