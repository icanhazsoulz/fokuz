<form
    wire:submit="save"
>
    <div class="flex flex-col mb-4">
        <x-label-input
            class="required"
            for="first-name"
        >{{ __('ui.contact_form.name') }}</x-label-input>
        <x-input-text
            wire:model="form.name"
            id="first-name"
            class="form-control"
            placeholder="{{ __('ui.contact_form.name') }}"
        />
        @error('form.name')
        <span class="error text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col mb-4">
        <x-label-input
            class="required"
            for="email"
        >{{ __('ui.contact_form.email') }}</x-label-input>
        <x-input-text
            wire:model="form.email"
            type="email"
            id="email"
            placeholder="{{ __('ui.contact_form.email') }}"
        />
        @error('form.email')
        <span class="error text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="flex flex-col">
        <x-label-input
            for="message"
            class="required"
        >{{ __('ui.contact_form.message') }}</x-label-input>
        <x-textarea
            wire:model="form.message"
            id="message"
            cols="30"
            rows="10"
            placeholder="{{ __('ui.contact_form.message_placeholder') }}"
        />
        @error('form.message')
        <span class="error text-red-600">{{ $message }}</span>
        @enderror
    </div>

    <div class="columns-1">
        <x-input-checkbox>
            {!! __('ui.contact_form.acceptance') !!}
        </x-input-checkbox>
    </div>
    <x-button-primary>{{ __('ui.contact_form.submit') }}</x-button-primary>
</form>
