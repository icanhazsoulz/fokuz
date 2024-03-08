<form
    wire:submit="save"
{{--    method="post"--}}
{{--    action="{{ route('create-appointment') }}"--}}
{{--    autocomplete="off"--}}
>
{{--    {{ \App\Models\User::where('email', 'a.stark@winterfell.com')->first() }}--}}
{{--    @csrf--}}
{{--    <div class="container">--}}
        <!-- START Client -->
        <fieldset class="border border-solid border-gray-400 p-3">
            <legend>Client block</legend>
            <div class="columns-2">
                <div class="sm:flex flex-col">
                    <label class="required form-label" for="email" class="form-label">{{ __('ui.contact_form.client.email') }}</label>
                    <input
                        wire:model.blur="form.email"
                        type="email"
                        class="form-control"
                        id="email"
                    >
                    @error('form.email')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label class="required form-label" for="phone">{{ __('ui.contact_form.client.phone') }}</label>
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
                        wire:model="form.firstName"
                        id="first-name"
                        type="text"
                        class="form-control"
                    >
                    @error('form.firstName')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label class="required form-label" for="last-name">{{ __('ui.contact_form.client.last_name') }}</label>
                    <input
                        wire:model="form.lastName"
                        id="last-name"
                        type="text"
                        class="form-control"
                    >
                    @error('form.lastName')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </fieldset>
        <!-- END Client -->
        <!-- START Pet -->
        <fieldset class="border border-solid border-gray-400 p-3">
            <legend>Pet block</legend>
            <p class="text-green-600 font-bold">{{ __('ui.contact_form.pet.info') }}</p>
            <div class="columns-2">
                <div class="sm:flex flex-col">
                    <label for="pet-name" class="form-label">{{ __('ui.contact_form.pet.name') }}</label>
                    <input
                        wire:model="form.petName"
                        type="text"
                        class="form-control"
                        id="pet-name"
                    >
                    @error('form.petName')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label for="pet-dob" class="form-label">{{ __('ui.contact_form.pet.dob') }}</label>
                    <input
                        wire:model="form.petDob"
                        type="date"
                        class="form-control"
                        id="pet-dob"
                    >
                    @error('form.petDob')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="columns-2">
                <div class="sm:flex flex-col">
                    <label for="pet-type" class="form-label">{{ __('ui.contact_form.pet.type.label') }}</label>
                    <select
                        wire:model="form.petTypeId"
                        class="form-control"
                        id="pet-type"
                    >
                        <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                        @foreach($petTypes as $id => $key)
                            <option value="{{ $id }}">{{ __('ui.contact_form.pet.type.'.$key) }}</option>
                        @endforeach
                    </select>
                    @error('form.petTypeId')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label for="pet-sex" class="form-label">{{ __('ui.contact_form.pet.sex.label') }}</label>
                    <select
                        wire:model="form.petSex"
                        class="form-control"
                        id="pet-sex"
                    >
                        <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                        <option value="male">{{ __('ui.contact_form.pet.sex.male') }}</option>
                        <option value="female">{{ __('ui.contact_form.pet.sex.female') }}</option>
                    </select>
                    @error('form.petSex')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="columns-2">
                <div class="sm:flex flex-col">
                    <label for="pet-breed" class="form-label">{{ __('ui.contact_form.pet.breed') }}</label>
                    <input
                        wire:model="form.petBreed"
                        type="text"
                        class="form-control"
                        id="pet-breed"
                    >
                    @error('form.petBreed')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label for="pet-photo" class="form-label">{{ __('ui.contact_form.pet.photo') }}</label>
                    <input
                        wire:model="form.petPhoto"
                        type="file"
                        class="form-control"
                        id="pet-photo"
                    >
                    @error('form.petPhoto')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </fieldset>
        <!-- END Pet -->
        <!-- START Appointment -->
        <fieldset class="border border-solid border-gray-400 p-3">
            <legend>Appointment block</legend>
            <div class="columns-1">
                <div class="sm:flex flex-col">
                    <label class="required form-label" for="category" class="form-label">{{ __('ui.contact_form.order.category') }}</label>
                    <select
                        wire:model="form.categoryId"
                        id="category"
                        class="form-control"
                    >
                        <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                        @foreach($categories as $id => $key)
                            <option value="{{ $id }}">{{ __('ui.category.'.$key) }}</option>
                        @endforeach
                    </select>
                    @error('form.categoryId')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label for="description" class="form-label">{{ __('ui.contact_form.order.description') }}</label>
                    <textarea
                        wire:model="form.description"
                        id="description"
                        class="form-control"
                        cols="30"
                        rows="10"
                    ></textarea>
                    @error('form.description')
                    <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
                <div class="columns-2">
                <div class="sm:flex flex-col">
                    <label class="required form-label" for="client-source">{{ __('ui.contact_form.order.client_source') }}</label>
                    <select
                        wire:model="form.clientSourceId"
                        id="client-source"
                        class="form-control"
                    >
                        <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                        @foreach($clientSources as $id => $key)
                            <option value="{{ $id }}">{{ __('ui.client_source.'.$key) }}</option>
                        @endforeach
                    </select>
                    @error('form.clientSourceId')
                        <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
                <div class="sm:flex flex-col">
                    <label for="shelter" class="form-label">{{ __('ui.contact_form.order.shelters') }}</label>
                    <select
                        wire:model="form.shelterId"
                        id="shelter"
                        class="form-control"
                    >
                        <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                        @foreach($shelters as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                    @error('form.shelterId')
                        <span class="error text-red-600">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </fieldset>
        <!-- END Appointment -->
{{--    </div>--}}

    {{--                <div class="mb-3">--}}
    {{--                    <label for="exampleInputPassword1" class="form-label">Password</label>--}}
    {{--                    <input type="password" class="form-control" id="exampleInputPassword1">--}}
    {{--                </div>--}}
{{--    <div id="" class="form-text">{{ __('ui.contact_form.privacy_note') }}</div>--}}
{{--    <div class="mb-3 form-check">--}}
{{--        <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--        <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--    </div>--}}

    <button type="submit" class="bg-sky-500 p-3">{{ __('ui.contact_form.submit') }}</button>
</form>
