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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ListPhotos extends Component implements HasForms, HasTable
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
            ->query(
                Media::query()
                    ->where('model_type', Photoshooting::class)
                    ->where('model_id', $this->photoshooting->id)
                    ->where('collection_name', 'default')
                )
            ->columns([
                ImageColumn::make('path')
                    ,
                Stack::make([
                    SpatieMediaLibrarySingleImageColumn::make('model.default')
                        ->collection('default')
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
                Action::make('addToCart')
                    ->label(__('filament_ui.cart.add_to_cart'))
                    ->action(
                        fn (Media $record) => $this->createCartItem($record)
                    )
                    ->hidden(fn (Media $record) => $record->cart_item()->exists())
                ,
                ViewAction::make(),
            ])
            ->bulkActions([
                BulkAction::make('addToCart')
                    ->label(__('filament_ui.cart.add_to_cart'))
                    ->action(
                        function (Collection $records) {
                            foreach ($records as $record) {
                                if ($record->cart_item()->exists()) continue;
                                $this->createCartItem($record);
                            }
                        }
                    )
                ,
            ]);
    }

    public function render(): View
    {
        return view('livewire.list-photos');
    }

    private function createCartItem($record)
    {
        $record->cart_item()->create([
            'user_id' => Auth::user()->getAuthIdentifier(),
            'media_id' => $record->id,
            'price' => 999,
            'qty' => 1,
        ]);
    }
}
