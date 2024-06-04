<form
    wire:submit="save"
>
    <div class="mb-4">
        <x-label-input
            class="required"
            for="email"
        >{{ __('ui.contact_form.email') }}</x-label-input>
        <x-input-text
            wire:model="form.email"
            type="email"
            id="email"
            placeholder="{{ __('ui.contact_form.email') }}"
            class="w-full"
        />
        @error('form.email')
        <span class="error text-red-600">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-6 flex gap-10">
        <x-input-checkbox>
            {!! __('ui.contact_form.acceptance') !!}
        </x-input-checkbox>
    </div>
    <x-button-primary>{{ __('ui.contact_form.submit') }}</x-button-primary>
</form>

