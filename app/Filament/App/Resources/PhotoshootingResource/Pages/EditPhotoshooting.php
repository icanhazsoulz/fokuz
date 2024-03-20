<?php

namespace App\Filament\App\Resources\PhotoshootingResource\Pages;

use App\Filament\App\Resources\PhotoshootingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhotoshooting extends EditRecord
{
    protected static string $resource = PhotoshootingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
