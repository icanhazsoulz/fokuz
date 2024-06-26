@php
    $classes = 'w-screen mb-28 pt-12 relative pb-10 before:content-[""] before:absolute before:z-10 before:top-0 before:left-0 before:right-0 before:w-full before:h-[500px] before:bg-green';
@endphp

<section {{ $attributes->merge(['class' => $classes]) }}>
    <x-container>
        <div class="mb-16">
            <x-header class="relative z-10">Memoiren</x-header>
            <x-subheader class="relative z-10">Aktueliste, wichtigste, atemberaubende</x-subheader>
            <x-points-block class="max-w-[1080px] before:bg-white-points after:bg-yellow">
                <ul class="flex gap-9 overflow-hidden px-5 pb-10  mt-24 mx-auto relative">
                    @foreach($posts as $post)
                        <li class="flex max-w-[320px]">
                            <x-card-layout class="px-4 pt-4 pb-20">
                                <x-post-card :post="$post" :isPosts="$isPosts" />
                            </x-card-layout>
                        </li>
                    @endforeach
                </ul>
            </x-points-block>
        </div>
    </x-container>
</section>
