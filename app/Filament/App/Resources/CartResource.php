<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\CartResource\Pages;
use App\Models\CartItem;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\Summarizers\Sum;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

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
                TextColumn::make('media.uuid'),
                TextColumn::make('qty')
                    ->label(__('filament_ui.cart.qty')),
                TextColumn::make('price')
                    ->label(__('filament_ui.cart.price'))
                    ->money('EUR', divideBy: 100)
                ,
                TextColumn::make('total')
                    ->label(__('filament_ui.cart.total'))
                    ->money('EUR', divideBy: 100)
                    ->summarize(Sum::make()->money('EUR', divideBy: 100))
                ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('user_id', Auth::user()->getAuthIdentifier())->count();
    }
}
