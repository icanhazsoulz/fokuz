<div class="absolute top-0 right-0">
    <ul>
        @foreach($socials as $social)
            <li class="p-3">
                <a
                    title="{{ $social->title }}"
                    href="{{ $social->url }}"
                    target="_blank"
                >
                    <svg
                        class="w-5 h-5 text-font-color-2 hover:text-font-disabled-input"
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
