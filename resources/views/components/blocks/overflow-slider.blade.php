<div class="w-screen overflow-hidden">
    <div class="flex">
        <section class="min-w-full grow bg-primary">
            <x-container class="px-0">
                <div class="bg-white pt-20 px-14 pb-24 relative rounded-bl-2xl relative rounded-br-2xl">
                    <div class="max-h-[780px] overflow-hidden bg-primary text-white pt-16 px-10 rounded-2xl relative">
                        <x-header class="text-white text-center tracking-tighter">
                            <span>Man über mich</span>
                            <x-page-link />
                        </x-header>
                        <div class="absolute bottom-10 right-12 z-10">
                            <div class="mb-3 flex gap-2.5">
                                <x-slider-btn class="text-white"></x-slider-btn>
                                <x-slider-btn class="rotate-180 text-white border-white"></x-slider-btn>
                            </div>
                            <div class="flex gap-2.5 text-white justify-between">
                                <x-slider-bullet />
                                <x-slider-bullet />
                                <x-slider-bullet />
                                <x-slider-bullet />
                                <x-slider-bullet />
                                <x-slider-bullet />
                                <x-slider-bullet />
                            </div>
                        </div>
                        @foreach($testimonials as $testimonial)
                            <x-testimonial :testimonial="$testimonial" />
                        @endforeach
                    </div>
                </div>
            </x-container>
        </section>
    </div>
</div>
