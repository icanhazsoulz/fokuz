<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\PhotoshootingResource\Pages;
use App\Filament\App\Resources\PhotoshootingResource\RelationManagers;
use App\Models\Photoshooting;
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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            ->query(Photoshooting::query()->where('user_id', Auth::user()->getAuthIdentifier()))
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
