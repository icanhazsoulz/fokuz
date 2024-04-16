<?php

namespace App\Filament\Resources\GalleryResource\Pages;

use App\Filament\Resources\GalleryResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListGalleries extends ListRecords
{
    protected static string $resource = GalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'clients' => Tab::make('Sliders')
                ->icon('heroicon-m-rectangle-stack')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('category', 'slider')),
            'admins' => Tab::make('Portfolio')
                ->icon('heroicon-m-rectangle-group')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('category', 'portfolio')),
        ];
    }
}
