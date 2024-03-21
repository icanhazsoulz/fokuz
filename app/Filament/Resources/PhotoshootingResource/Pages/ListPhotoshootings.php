<?php

namespace App\Filament\Resources\PhotoshootingResource\Pages;

use App\Filament\Resources\PhotoshootingResource;
use App\Models\Shelter;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListPhotoshootings extends ListRecords
{
    protected static string $resource = PhotoshootingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'clients' => Tab::make('Clients')
                ->icon('heroicon-m-user-group')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('photoshootingable_type', User::class)),
            'shelters' => Tab::make('Shelters')
                ->icon('heroicon-m-home-modern')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('photoshootingable_type', Shelter::class)),
        ];
    }
}
