<form wire:submit="save">
    <div class="pt-4">
        <!-- START Client -->
        <div class="flex flex-col mb-4">
            <x-label-input class="required"
                   for="name">{{ __('ui.contact_form.name') }}</x-label-input>
            <x-input-text
                wire:model="form.name"
                id="name"
                type="text"
                class="form-control"
                required
            />
            @error('form.name')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input class="required" for="email">{{ __('ui.contact_form.email') }}</x-label-input>
            <x-input-text
                wire:model.blur="form.email"
                type="email"
                class="form-control"
                id="email"
                required
            />
            @error('form.email')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input class="required" for="phone">{{ __('ui.contact_form.phone') }}</x-label-input>
            <x-input-text
                wire:model="form.phone"
                type="tel"
                class="form-control"
                id="phone"
                required
            />
            @error('form.phone')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <!-- END Client -->

        <!-- START Pet -->
        <p class="text-green-600 font-bold">{{ __('ui.contact_form.pet.info') }}</p>
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-name" class="required">{{ __('ui.contact_form.pet.name') }}</x-label-input>
            <x-input-text
                wire:model="form.petName"
                type="text"
                class="form-control"
                id="pet-name"
                required
            />
            @error('form.petName')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-dob">{{ __('ui.contact_form.pet.dob') }}</x-label-input>
            <x-input-text
                wire:model="form.petDob"
                type="date"
                class="form-control"
                id="pet-dob"
            />
            @error('form.petDob')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-type" class="required">{{ __('ui.contact_form.pet.type.label') }}</x-label-input>
            <select
                wire:model="form.petTypeId"
                class="form-control"
                id="pet-type"
                required
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                @foreach($petTypes as $id => $slug)
                    <option value="{{ $id }}">{{ __('ui.contact_form.pet.type.'.$slug) }}</option>
                @endforeach
            </select>
            @error('form.petTypeId')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-sex">{{ __('ui.contact_form.pet.sex.label') }}</x-label-input>
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
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-breed">{{ __('ui.contact_form.pet.breed') }}</x-label-input>
            <x-input-text
                wire:model="form.petBreed"
                type="text"
                class="form-control"
                id="pet-breed"
            />
            @error('form.petBreed')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="pet-image">{{ __('ui.contact_form.pet.image') }}</x-label-input>
            <input
                wire:model="form.petImage"
                type="file"
                class="form-control"
                id="pet-image"
            />
            @error('form.petImage')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <!-- END Pet -->

        <!-- START Appointment -->
        <div class="flex flex-col mb-4">
            <x-label-input class="required" for="category">{{ __('ui.contact_form.appointment.category') }}</x-label-input>
            <select
                wire:model="form.categoryId"
                wire:change="selectAddress()"
                id="category"
                class="form-control"
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                @foreach($categories as $id => $slug)
                    <option value="{{ $id }}">{{ __('ui.category.'.$slug) }}</option>
                @endforeach
            </select>
            @error('form.categoryId')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="address" class="required">{{ __('ui.contact_form.appointment.address') }}</x-label-input>
            <x-input-text
                wire:model="form.address"
                type="text"
                class="form-control"
                placeholder="{{ $placeholder }}"
                id="address"
            />
            @error('form.address')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex flex-col mb-4">
            <x-label-input for="description">{{ __('ui.contact_form.appointment.description') }}</x-label-input>
            <x-textarea
                wire:model="form.description"
                id="description"
                class="form-control"
                cols="30"
                rows="10"
                placeholder="{{ __('ui.contact_form.message_placeholder') }}"
            ></x-textarea>
            @error('form.description')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input class="required"
                   for="client-source">{{ __('ui.contact_form.appointment.client_source') }}</x-label-input>
            <select
                wire:model="form.clientSourceId"
                id="client-source"
                class="form-control"
            >
                <option value="">{{ __('ui.contact_form.empty_option') }}</option>
                @foreach($clientSources as $id => $slug)
                    <option value="{{ $id }}">{{ __('ui.client_source.'.$slug) }}</option>
                @endforeach
            </select>
            @error('form.clientSourceId')
            <span class="error text-red-600">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex flex-col mb-4">
            <x-label-input for="shelter">{{ __('ui.contact_form.appointment.shelters') }}</x-label-input>
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
        <!-- END Appointment -->
    </div>
    <x-input-checkbox>
        {!! __('ui.contact_form.acceptance') !!}
    </x-input-checkbox>
    <x-button-primary>{{ __('ui.contact_form.submit') }}</x-button-primary>
</form>
