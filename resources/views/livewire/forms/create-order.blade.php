<form
    wire:submit="save"
{{--    method="post"--}}
{{--    action="{{ route('create-order') }}"--}}
{{--    autocomplete="off"--}}
    class="mt-5"
>
{{--    @csrf--}}
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
            <label class="required form-label" for="theme" class="form-label">{{ __('ui.contact_form.theme') }}</label>
            <select
                wire:model="form.theme"
                id="theme"
                class="form-control"
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                <option value="{{ __('ui.categories.cats') }}">{{ __('ui.categories.cats') }}</option>
                <option value="{{ __('ui.categories.dogs') }}">{{ __('ui.categories.dogs') }}</option>
                <option value="{{ __('ui.categories.small_animals') }}">{{ __('ui.categories.small_animals') }}</option>
            </select>
            @error('form.theme')
                <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-12 mb-3">
            <label for="description" class="form-label">{{ __('ui.contact_form.description') }}</label>
            <textarea
                wire:model="form.description"
                id="description"
                class="form-control"
                cols="30"
                rows="10"
            ></textarea>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="required form-label" for="client-source">{{ __('ui.contact_form.client_source') }}</label>
            <select
                wire:model="form.client_source"
                id="client-source"
                class="form-control"
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                <option value="google">Google</option>
                <option value="ads">Ads</option>
                <option value="recommendation">Friends recommendation</option>
            </select>
            @error('form.client_source')
            <span class="error text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col">
            <label for="shelter" class="form-label">{{ __('ui.contact_form.shelters') }}</label>
            <select
                wire:model="form.shelter"
                id="shelter"
                class="form-control"
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                @foreach($shelters as $shelter)
                    <option value="{{ $shelter->id }}">{{ $shelter->name }}</option>
{{--                    <option value="02">Shelter 2</option>--}}
{{--                    <option value="03">Shelter 3</option>--}}
                @endforeach
            </select>
        </div>
    </div>
    {{--                <div class="mb-3">--}}
    {{--                    <label for="exampleInputPassword1" class="form-label">Password</label>--}}
    {{--                    <input type="password" class="form-control" id="exampleInputPassword1">--}}
    {{--                </div>--}}
{{--    <div id="" class="form-text">{{ __('ui.contact_form.privacy_note') }}</div>--}}
{{--    <div class="mb-3 form-check">--}}
{{--        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--    </div>--}}
    <button type="submit" class="btn btn-primary">{{ __('ui.contact_form.submit') }}</button>
</form>
