<?php

namespace App\Providers;

use App\Filament\App\Resources\CartResource;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentView;
use Filament\Tables\View\TablesRenderHook;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(125);

        // Add order summary modal with PayPal buttons to the Cart page
        FilamentView::registerRenderHook(
            PanelsRenderHook::PAGE_HEADER_ACTIONS_AFTER,
            fn (): View => view('filament.app.pages.actions.checkout'),
            scopes: CartResource::class,
        );
        FilamentAsset::register([
//            Js::make('paypal-sdk', "https://www.paypal.com/sdk/js?client-id=AVKUyoHnoXZ_9hspIeYPBX9_s0ZGirFLwEkQQdIOSFHt8h9x5VYcRgaUNTmz8CiLK_76JbaAiurlKJ8Y&currency=USD"),
            Js::make('paypal-client', __DIR__ . '/../../resources/js/paypal.js'),
        ]);
    }
}
