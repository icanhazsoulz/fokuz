<section>
    <x-container>
        <div class="bg-white rounded-tr-2xl pt-16 px-14 pb-24 relative before:content-[''] before:w-full before:h-16 before:bg-white before:absolute before:left-0 before-r-0 before:-top-8 before:rounded-tl-2xl before:rounded-tr-2xl">
            @foreach($posts as $post)
                <x-post-preview :post="$post" />
            @endforeach
        </div>

{{--        TODO: Make secondary or inverted button     --}}
        <div class="text-center">
            <x-button-primary>Weitere Artikel</x-button-primary>
        </div>
    </x-container>
</section>
