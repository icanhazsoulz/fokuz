<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\Categories;
use App\Filament\Widgets\ClientSources;
use App\Filament\Widgets\Types;
use Filament\Pages\Page;

class Options extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-puzzle-piece';

    protected static string $view = 'filament.pages.options';

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
