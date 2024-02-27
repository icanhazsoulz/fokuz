<?php

namespace App\Filament\Resources\PhotoshootingResource\Pages;

use App\Filament\Resources\PhotoshootingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhotoshootings extends ListRecords
{
    protected static string $resource = PhotoshootingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
