<button {{ $attributes->merge(['type' => 'submit', 'class' => '
    items-center
    px-4 py-6
    bg-primary
    hover:bg-primary-hover
    focus:bg-primary-hover focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2
    active:bg-primary-pressed
    border-2 border-white rounded
    shadow-md
    min-w-72
    font-normal font-sans text-base text-white
    tracking-widest
    transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
