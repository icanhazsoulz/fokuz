<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Options extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    protected static string $view = 'filament.pages.options';

    protected static ?string $navigationGroup = 'Settings';

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('admin');
    }

//    protected function getHeaderWidgets(): array
//    {
//        return [
//            Categories::class,
//            Types::class,
//            ClientSources::class,
//        ];
//    }
//
//    public function getHeaderWidgetsColumns(): int | array
//    {
//        return 3;
//    }
}
