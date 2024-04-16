<?php

namespace App\Filament\App\Resources\PhotoshootingResource\Pages;

use App\Filament\App\Resources\PhotoshootingResource;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;

class ViewMedia extends Page
{
    use InteractsWithRecord;

    protected static string $resource = PhotoshootingResource::class;

    protected static string $view = 'filament.app.resources.photoshooting-resource.pages.view-media';

    public function mount(int | string $record): void
    {
        $this->record = $this->resolveRecord($record);
    }
}
