<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class Test extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-camera';

    protected static string $view = 'filament.app.pages.test';

    public static function canAccess(): bool
    {
        return auth()->user()->hasRole('client');
    }

    public function getTabs(): array
    {
        return [
            'clients' => Tab::make('Clients')
                ->icon('heroicon-m-user-group')
//                ->modifyQueryUsing(fn (Builder $query) => $query->role('client'))
            ,
            'admins' => Tab::make('Admins')
                ->icon('heroicon-m-key')
//                ->modifyQueryUsing(fn (Builder $query) => $query->role('admin'))
            ,
        ];
    }
}
