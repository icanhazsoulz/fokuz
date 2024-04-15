<style>
    /* Basic styling for photo grid */
    .photo-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        gap: 20px;
        list-style: none;
        padding: 0;
    }
    .photo-item {
        text-align: center;
    }
    .photo-title {
        margin: 10px 0;
        font-weight: bold;
    }
</style>
@php
    $default = $record->getMedia('default');
    $downloads = $record->getMedia('downloads');
@endphp

<x-filament-panels::page>
    <div x-data="{ tab: 'tab1' }">
        <x-filament::tabs label="Content tabs">
            <x-filament::tabs.item @click="tab = 'tab1'" :alpine-active="'tab === \'tab1\''">
                All photos
            </x-filament::tabs.item>

            <x-filament::tabs.item @click="tab = 'tab2'" :alpine-active="'tab === \'tab2\''">
                Downloads
            </x-filament::tabs.item>

        </x-filament::tabs>

        {{-- Display Resource Table --}}
        <div class="mt-2">
            <div x-show="tab === 'tab1'">
                <h1 x-data="{ message: 'I ❤️ Alpine' }" x-text="message"></h1>
{{--                @livewire('list-photos')--}}
                <form wire:submit="save">
                    <x-filament::button>Select all</x-filament::button>
                    <x-filament::button type="submit">{{ __('filament_ui.cart.add_to_cart') }}</x-filament::button>

                    <ul class="photo-grid">
                        @foreach($default as $photoItem)
                            <li class="photo-item">
                                <x-filament::section>
                                    <x-filament::input.checkbox wire:model="photoItem[]" class="mb-2" />
                                    <img src="{{ $photoItem->getUrl() }}" alt="{{ $photoItem->name }}">
                                    <div class="photo-title">{{ $photoItem->name }}</div>
                                    <x-filament::link icon="heroicon-o-shopping-cart">Add to Cart</x-filament::link>
                                </x-filament::section>
                            </li>
                        @endforeach
                    </ul>
                </form>
            </div>
            <div x-show="tab === 'tab2'">
                <x-filament::button>Select all</x-filament::button>
                <x-filament::button>Download archive</x-filament::button>
                <ul class="photo-grid">
                    @foreach($downloads as $photoItem)
                        <li class="photo-item">
                            <x-filament::input.checkbox wire:model="photoItem[]" />
                            <img src="{{ $photoItem->getUrl() }}" alt="{{ $photoItem->name }}">
                            <div class="photo-title">{{ $photoItem->name }}</div>
                            <x-filament::button
                                icon="heroicon-m-arrow-down-tray"
                                wire:click="download"
                                >{{ __('filament_ui.general.download') }}</x-filament::button>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

{{--    <x-filament::tabs label="Content tabs">--}}
{{--        <x-filament::tabs.item>--}}
{{--            All photos--}}
{{--        </x-filament::tabs.item>--}}

{{--        <x-filament::tabs.item>--}}
{{--            Downloads--}}
{{--        </x-filament::tabs.item>--}}

{{--        <x-filament::tabs.item>--}}
{{--            Tab 3--}}
{{--        </x-filament::tabs.item>--}}
{{--    </x-filament::tabs>--}}

{{--    <div class="mt-2">--}}
{{--        <div x-show="tab === 'tab1'">--}}
{{--            @livewire('list-photos')--}}
{{--        </div>--}}
{{--        <div x-show="tab === 'tab2'">--}}
{{--            <livewire:events.list-events-role/>  // your livewire view--}}
{{--        </div>--}}
{{--    </div>--}}
</x-filament-panels::page>
