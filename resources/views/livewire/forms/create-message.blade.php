<form
    wire:submit="save"
>
    <div class="columns-2">
        <div class="sm:flex flex-col">
            <x-label-input
                class="required"
                for="email"
            >{{ __('ui.contact_form.client.email') }}</x-label-input>
            <x-input-text
                wire:model="form.email"
                type="email"
                id="email"
                placeholder="{{ __('ui.contact_form.client.email') }}"
            />
            @error('form.email')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:flex flex-col">
            <x-label-input
                class="required"
                for="phone"
            >{{ __('ui.contact_form.client.phone') }}</x-label-input>
            <x-input-text
                wire:model="form.phone"
                type="tel"
                class="form-control"
                id="phone"
                placeholder="{{ __('ui.contact_form.client.phone') }}"
            />
            @error('form.phone')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="columns-2">
        <div class="sm:flex flex-col">
            <x-label-input
                class="required"
                for="first-name"
            >{{ __('ui.contact_form.client.first_name') }}</x-label-input>
            <x-input-text
                wire:model="form.firstName"
                id="first-name"
                class="form-control"
                placeholder="{{ __('ui.contact_form.client.first_name') }}"
            />
            @error('form.firstName')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:flex flex-col">
            <x-label-input
                class="required"
                for="last-name"
            >{{ __('ui.contact_form.client.last_name') }}</x-label-input>
            <x-input-text
                wire:model="form.lastName"
                id="last-name"
                placeholder="{{ __('ui.contact_form.client.last_name') }}"
            />
            @error('form.lastName')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="columns-1">
        <div class="sm:flex flex-col">
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
    </div>
    <x-button-primary>{{ __('ui.contact_form.submit') }}</x-button-primary>
</form>
