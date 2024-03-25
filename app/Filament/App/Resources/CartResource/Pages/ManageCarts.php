<?php

namespace App\Filament\App\Resources\CartResource\Pages;

use App\Filament\App\Resources\CartResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCarts extends ManageRecords
{
    protected static string $resource = CartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
