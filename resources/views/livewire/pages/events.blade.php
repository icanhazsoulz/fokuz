<div>
    <section>
        <div class="container mx-auto">
            <x-header class="text-primary-focused">{{ $title }}</x-header>
            <x-subheader class="text-primary-focused">{{ $subtitle }}</x-subheader>
        </div>
    </section>
    <section>
        <div class="container mx-auto">
            @foreach($events as $event)
                <div class="p-12">
                    <div class="flex">
                        <img src="assets/images/{{ $event->image }}" alt="{{ $event->title }}">
                        <div class="flex flex-col justify-between px-12 py-3">
                            <div>
                                <div>{{ $event->title }}</div>
                                <div>{{ $event->subtitle }}</div>
                            </div>
                            <div>{{ $event->text }}</div>
                            <a href="#">Mehr sehen</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</div>
