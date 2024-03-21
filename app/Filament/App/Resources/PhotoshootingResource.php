<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\PhotoshootingResource\Pages;
use App\Filament\App\Resources\PhotoshootingResource\RelationManagers;
use App\Models\Photoshooting;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class PhotoshootingResource extends Resource
{
    protected static ?string $model = Photoshooting::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

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
            ->query(
                // TODO: make based on role when add shelters as customers
                Photoshooting::query()
                    ->where('photoshootingable_id', Auth::user()->getAuthIdentifier())
                    ->where('photoshootingable_type', User::class))
            ->columns([
                TextColumn::make('pet.name')
                    ->label('Pet name')
                    ->searchable(),
                ImageColumn::make('pet.photo')
                    ->label('Pet photo'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPhotoshootings::route('/'),
            'create' => Pages\CreatePhotoshooting::route('/create'),
            'edit' => Pages\EditPhotoshooting::route('/{record}/edit'),
        ];
    }
}
