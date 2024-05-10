<div class="absolute top-0 right-0">
    <ul class="flex flex-col items-center gap-6">
        @foreach($socials as $social)
            <li>
                <a
                    title="{{ $social->title }}"
                    href="{{ $social->url }}"
                    target="_blank" class="group block text-white hover:text-[#f4eab4] p-3 "
                >
                    <svg
                        class="w-5 h-5"
                    >
                        <use
                            class="transition-all duration-200"
                            href="./assets/icons/icons-sprite.svg#{{ strtolower($social->title) }}"
                        ></use>
                    </svg>
                </a>
            </li>
        @endforeach
    </ul>
</div>
