<?php

namespace App\Livewire;

use App\Filament\Columns\SpatieMediaLibrarySingleImageColumn;
use App\Models\Media;
use App\Models\Photoshooting;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Njxqlus\Filament\Components\Infolists\LightboxImageEntry;
use Njxqlus\Filament\Components\Infolists\LightboxSpatieMediaLibraryImageEntry;

class ListDownloads extends Component implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    public Photoshooting $photoshooting;

    public function mount()
    {
        $this->photoshooting = Photoshooting::find(request()->route()->parameter('record'));
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                // Lightbox
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->photoshooting->getMedia('downloads')->toQuery())
            ->columns([
                Stack::make([
                    SpatieMediaLibrarySingleImageColumn::make('model.downloads')
                        ->collection('downloads')
                        ->label(__('filament_ui.general.downloads'))
                    ,
                    TextColumn::make('name'),
                    TextColumn::make('uuid'),
                ])
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,
            ])
            ->actions([
                Action::make('download')
                    ->label(__('filament_ui.general.download'))
//                    ->action(
//                        fn (Media $record) => $this->createCartItem($record)
//                    )
                ,
                ViewAction::make(),
            ])
            ->bulkActions([
                BulkAction::make('downloadAll')
                    ->label(__('filament_ui.general.download_all'))
//                    ->action(
//                        function (Collection $records) {
//                            return true;
//                        }
//                    )
                ,
            ]);

    }

    public function render(): View
    {
        return view('livewire.list-photos');
    }
}
