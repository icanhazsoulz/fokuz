<?php

namespace App\Filament\Resources\ClientSourceResource\Pages;

use App\Filament\Resources\ClientSourceResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageClientSources extends ManageRecords
{
    protected static string $resource = ClientSourceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
