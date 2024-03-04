<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoshootingResource\Pages;
use App\Filament\Resources\PhotoshootingResource\RelationManagers;
use App\Models\Pet;
use App\Models\Photoshooting;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class PhotoshootingResource extends Resource
{
    protected static ?string $model = Photoshooting::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Client')
                    ->relationship(
                        name: 'user',
                        titleAttribute: 'full_name',
                        modifyQueryUsing: fn (Builder $query) => $query->role('client'),
                    )
                    ->searchable()
                    ->preload()
//                    ->live()
                    ->createOptionForm([
                        TextInput::make('first_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('last_name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->required()
                            ->email()
                    ]),
//                Select::make('pet_id')
//                    ->label('Pet')
//                    ->relationship('pet', 'name')
                // Add View and Create Pet buttons here?
//                    ->searchable()
//                    ->preload()
//                    ->options(fn (Get $get): Collection => Pet::query()
//                        ->where('user_id', $get('user_id'))
//                        ->pluck('name', 'id'))
//                    ->createOptionForm([
//
//                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('appointment.id')
                    ->label('Appointment ID'),
                TextColumn::make('user.full_name')
                    ->label('Client')
                    ->searchable(),
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
                Tables\Actions\DeleteAction::make(),
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
            RelationManagers\PetsRelationManager::class,
            RelationManagers\GalleriesRelationManager::class
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
