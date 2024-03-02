<form
    wire:submit="save"
>
    <div class="columns-2">
        <div class="sm:flex flex-col">
            <label class="required form-label" for="email" class="form-label">{{ __('ui.contact_form.client.email') }}</label>
            <input
                wire:model="form.email"
                type="email"
                class="form-control"
                id="email"
            >
            @error('form.email')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:flex flex-col">
            <label class="required form-label" for="phone" class="form-label">{{ __('ui.contact_form.client.phone') }}</label>
            <input
                wire:model="form.phone"
                type="tel"
                class="form-control"
                id="phone"
            >
            @error('form.phone')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="columns-2">
        <div class="sm:flex flex-col">
            <label class="required form-label" for="first-name">{{ __('ui.contact_form.client.first_name') }}</label>
            <input
                wire:model="form.first_name"
                id="first-name"
                type="text"
                class="form-control"
            >
            @error('form.first_name')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="sm:flex flex-col">
            <label class="required form-label" for="last-name">{{ __('ui.contact_form.client.last_name') }}</label>
            <input
                wire:model="form.last_name"
                id="last-name"
                type="text"
                class="form-control"
            >
            @error('form.last_name')
                <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="columns-1">
        <div class="sm:flex flex-col">
            <label for="message" class="form-label">{{ __('ui.contact_form.message') }}</label>
            <textarea
                wire:model="form.message"
                id="message"
                class="form-control"
                cols="30"
                rows="10"
            ></textarea>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 p-3">{{ __('ui.contact_form.submit') }}</button>
</form>
