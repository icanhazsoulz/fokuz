<?php

namespace App\Filament\Resources\ShelterResource\Pages;

use App\Filament\Resources\ShelterResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditShelter extends EditRecord
{
    protected static string $resource = ShelterResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
