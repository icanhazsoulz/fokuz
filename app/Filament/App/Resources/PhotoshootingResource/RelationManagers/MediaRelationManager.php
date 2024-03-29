<?php

namespace App\Filament\App\Resources\PhotoshootingResource\RelationManagers;

use App\Models\CartItem;
use App\Models\Media;
use App\Models\Photoshooting;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class MediaRelationManager extends RelationManager
{
    protected static string $relationship = 'media';

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
            ->recordTitleAttribute('name')
            ->columns([
                SpatieMediaLibraryImageColumn::make('model.default')
                    ->collection('default')
                ,
//                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('uuid'),

            ])
            ->filters([
                //
            ])
//            ->headerActions([
//                Tables\Actions\CreateAction::make(),
//            ])
            ->actions([
                Action::make('addToCart')
                    ->action(
                        fn (Media $record) => $this->createCartItem($record)
                    )
                    ->hidden(fn (Media $record) => $record->cart_item()->exists())
                ,
                Tables\Actions\ViewAction::make(),

//                Tables\Actions\EditAction::make(),
//                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkAction::make('addToCart')
                    ->action(
                        function (Collection $records) {
                            foreach ($records as $record) {
                                if ($record->cart_item()->exists()) continue;
                                $this->createCartItem($record);
                            }
                        }
                    )
                ,
//                Tables\Actions\BulkAction::make('removeFromCart')
//                    ->action(fn (Collection $records) => $records->each(fn (Media $record, int $key) => $record->cart_item()->delete()))
//                Tables\Actions\BulkActionGroup::make([
//                    Tables\Actions\DeleteBulkAction::make(),
//                ]),
            ]);
    }

    private function createCartItem($record)
    {
        $record->cart_item()->create([
            'user_id' => Auth::user()->getAuthIdentifier(),
            'media_id' => $record->id,
        ]);
    }
}
