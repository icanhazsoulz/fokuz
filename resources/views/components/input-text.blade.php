@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'type' => 'text',
        'class' => '
            border border-gray-light rounded
            focus:border-primary-focused focus:ring-indigo-500
            placeholder:text-gray-dark placeholder:font-sans placeholder:font-light placeholder:text-2xl
            p-6 mb-4
            font-sans font-light text-2xl text-primary-focused
        '
    ]) !!}>
