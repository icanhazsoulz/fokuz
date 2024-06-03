@php
    $classes = 'mb-28';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container>
        <x-card-title>
            Bleiben Sie mit unseren Neuigkeiten auf dem Laufenden
        </x-card-title>
        <div class="max-w-[800px]">
            <livewire:forms.subscribe-form />
        </div>
    </x-container>
</section>
