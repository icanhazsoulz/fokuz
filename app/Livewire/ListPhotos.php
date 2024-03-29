<?php

namespace App\Livewire;

use App\Filament\App\Resources\PhotoshootingResource\Pages\ViewMedia;
use App\Models\Media;
use App\Models\Photoshooting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Contracts\TranslatableContentDriver;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Livewire\Component;

class ListPhotos extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public Photoshooting $variableFromFilamentPage;
//
//    public function mount(Photoshooting $photoshooting)
//    {
//        $this->photoshooting = $photoshooting;
//    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Media::query())
//            ->relationship(fn (): MorphMany => $this->photoshooting->media())
//            ->inverseRelationship('photoshooting')
            ->columns([
                TextColumn::make('name')
            ])
            ->actions([

            ])
            ->bulkActions([

            ]);

    }

    public function render(): View
    {
        return view('livewire.list-photos');
    }
}
