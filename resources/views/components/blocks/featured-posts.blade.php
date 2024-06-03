@php
    $classes = 'h-dvh pt-24';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x.container>
        <x-header class="text-primary-focused">Memoiren</x-header>
        <x-subheader class="text-primary-focused">Aktuellste, wichtigste, atemberaubende</x-subheader>

        <ul class="grid grid-cols-3 gap-8">
            @foreach($posts as $post)
                <li>
                    <x-post-card :post="$post" />
                </li>
            @endforeach
        </ul>
    </x.container>
</section>
