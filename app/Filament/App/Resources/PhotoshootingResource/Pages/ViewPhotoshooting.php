<?php

namespace App\Filament\App\Resources\PhotoshootingResource\Pages;

use App\Filament\App\Resources\PhotoshootingResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Database\Eloquent\Builder;

class ViewPhotoshooting extends ViewRecord
{
    protected static string $resource = PhotoshootingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
