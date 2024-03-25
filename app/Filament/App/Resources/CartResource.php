<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\CartResource\Pages;
use App\Filament\App\Resources\CartResource\RelationManagers;
use App\Models\Cart;
use App\Models\CartItem;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CartResource extends Resource
{
    protected static ?string $model = CartItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                SpatieMediaLibraryImageColumn::make('media_id')
//                    ->collection('default')
//                ,
                Tables\Columns\TextColumn::make('media.uuid'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('removeFromCart')
                    ->action(fn (CartItem $record) => $record->delete())
//                Tables\Actions\EditAction::make(),
//                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCarts::route('/'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return __('filament_ui.general.cart');
    }
}
