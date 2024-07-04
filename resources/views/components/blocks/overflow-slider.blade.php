<div class="w-screen overflow-hidden">
    <div class="flex">
        <section class="min-w-full grow bg-primary">
            <x-container class="px-0">
                <div class="bg-white pt-20 px-14 pb-24 relative rounded-bl-2xl relative rounded-br-2xl">
                    <div class="bg-primary text-white pt-16 px-10 rounded-2xl relative">
                        <x-header class="text-white text-center tracking-tighter">
                            <span>Man über mich</span>
                            <x-page-link />
                        </x-header>
                        @foreach($testimonials as $testimonial)
                            <x-testimonial :testimonial="$testimonial" />
                        @endforeach
                    </div>
                </div>
            </x-container>
        </section>
    </div>
</div>
