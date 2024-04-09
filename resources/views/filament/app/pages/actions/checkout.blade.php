<x-filament::modal id="checkout" width="3xl">
    <x-slot name="trigger">
        <x-filament::button>
            {{ __('filament_ui.cart.checkout') }}
        </x-filament::button>
    </x-slot>
    @php
        $items = App\Models\CartItem::where('user_id', Auth::user()->getAuthIdentifier())->get();

        $subtotal = $items
            ->map(fn ($item, $key) => $item->qty * $item->price)
            ->reduce(fn ($carry, $item) => $carry + $item)
            ;

        $cartData = [];
        $items->each(function (App\Models\CartItem $item, int $key) use (&$cartData) {
            $cartData['items'][] = [
                'uuid' => $item->media->uuid,
                'qty' => $item->qty,
                'price' => $item->price
            ];
        });

        $cartData['subtotal'] = $subtotal;
    @endphp

    <x-filament::section>
        <x-slot name="heading">
            Order summary
        </x-slot>
        <x-slot name="description">
            {{ count($items) }} items
        </x-slot>


        <ol style="list-style: decimal;" class="mb-5">
            @foreach($items as $item)
                <li>
                    <div class="flex justify-between">
                        <div class="basis-1/4">
                            <img src="image.jpg" alt="">
                        </div>
                        <div class="basis-1/4">{{ $item->media->uuid }}</div>
                        <div class="basis-1/4">x{{ $item->qty }}</div>
                        <div class="basis-1/4">€&nbsp;{{ $item->price/100 }}</div>
                    </div>
                </li>
            @endforeach
        </ol>

        <hr>

        <div class="text-end">
            {{ __('filament_ui.cart.total') . ':' }}<span class="font-bold ps-3">{{ $subtotal/100 }}</span>
        </div>
    </x-filament::section>

    <div id="cart" class="hidden">{{ Js::encode($cartData) }}</div>


    <div id="paypal-button-container"></div>
    <p id="result-message"></p>
    <script src="https://www.paypal.com/sdk/js?client-id=AVKUyoHnoXZ_9hspIeYPBX9_s0ZGirFLwEkQQdIOSFHt8h9x5VYcRgaUNTmz8CiLK_76JbaAiurlKJ8Y&currency=USD"></script>
</x-filament::modal>
