@php
    $classes = 'mb-28';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <div class="container max-w-[1160px] mx-auto">
        <h4 class="mb-6 font-sans font-semibold text-primary-focused text-2xl tracking-widest">
            Bleiben Sie mit unseren Neuigkeiten auf dem Laufenden
        </h4>
        <div class="max-w-[800px]">
            <livewire:forms.subscribe-form />
        </div>
    </div>
</section>
