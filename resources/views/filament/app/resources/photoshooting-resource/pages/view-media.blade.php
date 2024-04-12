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
                @livewire('list-photos')
            </div>
            <div x-show="tab === 'tab2'">
{{--                <livewire:events.list-events-role/>  // your livewire view--}}
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
