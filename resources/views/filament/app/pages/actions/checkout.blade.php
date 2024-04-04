<x-filament::modal id="checkout" width="3xl">
    <x-slot name="trigger">
        <x-filament::button>
            {{ __('filament_ui.cart.checkout') }}
        </x-filament::button>
    </x-slot>
    @php
        $items = \App\Models\CartItem::where('user_id', Auth::user()->getAuthIdentifier())->get();
    @endphp

    <x-filament::section>
        <x-slot name="heading">
            Order summary
        </x-slot>
        <x-slot name="description">
            {{ count($items) }} items
        </x-slot>


        @foreach($items as $item)
            <ul>
                <li>{{ $item->media_id . ' | ' . $item->media->uuid . ' | ' . $item->price/100 }}</li>
            </ul>
        @endforeach
    </x-filament::section>




    <div id="paypal-button-container"></div>
    <p id="result-message"></p>
    <script src="https://www.paypal.com/sdk/js?client-id=AVKUyoHnoXZ_9hspIeYPBX9_s0ZGirFLwEkQQdIOSFHt8h9x5VYcRgaUNTmz8CiLK_76JbaAiurlKJ8Y&currency=USD"></script>
</x-filament::modal>
<?php //var_dump($items); ?><!---->


