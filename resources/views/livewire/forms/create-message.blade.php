<form
    wire:submit="save"
    class="mt-5"
>
    <div class="row mb-3">
        <div class="col">
            <label class="required form-label" for="first-name">{{ __('ui.contact_form.first_name') }}</label>
            <input
                wire:model="form.first_name"
                id="first-name"
                type="text"
                class="form-control"
            >
            @error('form.first_name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col">
            <label class="required form-label" for="last-name">{{ __('ui.contact_form.last_name') }}</label>
            <input
                wire:model="form.last_name"
                id="last-name"
                type="text"
                class="form-control"
            >
            @error('form.last_name')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="required form-label" for="email" class="form-label">{{ __('ui.contact_form.email') }}</label>
            <input
                wire:model="form.email"
                type="email"
                class="form-control"
                id="email"
            >
            @error('form.email')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col">
            <label class="required form-label" for="phone" class="form-label">{{ __('ui.contact_form.phone') }}</label>
            <input
                wire:model="form.phone"
                type="tel"
                class="form-control"
                id="phone"
            >
            @error('form.phone')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row">
        <div class="col-12 mb-3">
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
    <button type="submit" class="btn btn-primary">{{ __('ui.contact_form.submit') }}</button>
</form>
