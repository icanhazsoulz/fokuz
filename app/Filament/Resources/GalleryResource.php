<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryResource\Pages;
use App\Filament\Resources\GalleryResource\RelationManagers;
use App\Models\Gallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('filament_ui.general.name'))
                    ->required()
                ,
                Forms\Components\Select::make('category')
                    ->options([
                        'slider' => 'Slider',
                        'portfolio' => 'Portfolio',
                    ]),
                Forms\Components\Checkbox::make('status')
                    ->label(__('filament_ui.general.published'))
                    ,
                Forms\Components\SpatieMediaLibraryFileUpload::make('photos')
                    ->reorderable()
                    ->multiple()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->label(__('ID')),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\SpatieMediaLibraryImageColumn::make('images')
                    ->stacked()
                    ->circular()
                    ->limit(10)
                    ->limitedRemainingText()
                    ,
                Tables\Columns\CheckboxColumn::make('status')
                    ->label(__('filament_ui.general.published'))
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
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
