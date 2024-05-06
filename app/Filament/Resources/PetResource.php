<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetResource\Pages;
use App\Models\Pet;
use App\Models\Type;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PetResource extends Resource
{
    protected static ?string $model = Pet::class;

    protected static ?string $navigationIcon = 'heroicon-o-heart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label(__('filament_ui.general.name'))
                    ->required()
                    ->maxLength(125),
                DatePicker::make('dob')
                    ->label(__('filament_ui.general.dob'))
                    ->required(),
                Select::make('type_id')
                    ->label(__('filament_ui.pet.type'))
                    ->options(Type::all()->pluck('name', 'id'))
                    ->required(),
                Select::make('sex')
                    ->label(__('filament_ui.pet.sex'))
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                    ])
                    ->required(),
                TextInput::make('breed')
                    ->label(__('filament_ui.pet.breed'))
                    ->maxLength(125),
                FileUpload::make('image')
                    ->label(__('filament_ui.general.image')),
                Select::make('user_id')
                    ->label(__('filament_ui.pet.owner'))
                    ->required()
                    ->relationship(
                        name: 'user',
                        titleAttribute: 'name',
//                        modifyQueryUsing: fn (Builder $query) => $query->whereNotNull('name'),
                        modifyQueryUsing: fn (Builder $query) => $query->role('client'),
                    )
                    ->searchable()
                    ->preload()
                    ->createOptionForm(fn (Form $form) => UserResource::form($form)),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label(__('filament_ui.general.name'))
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label(__('filament_ui.general.image')),
                Tables\Columns\TextColumn::make('sex')
                    ->label(__('filament_ui.pet.sex')),
                Tables\Columns\TextColumn::make('dob')
                    ->label(__('filament_ui.general.dob'))
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('type.name')
                    ->label(__('filament_ui.pet.type'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('breed')
                    ->label(__('filament_ui.pet.breed'))
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('user.name')
                    ->label(__('filament_ui.pet.owner'))
                    ->label('Owner')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('type_id')
                    ->label('Type')
                    ->options(Type::all()->pluck('name', 'id')),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPets::route('/'),
            'create' => Pages\CreatePet::route('/create'),
            'edit' => Pages\EditPet::route('/{record}/edit'),
        ];
    }
}
