<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PhotoshootingResource\Pages;
use App\Filament\Resources\PhotoshootingResource\RelationManagers;
use App\Models\Appointment;
use App\Models\Pet;
use App\Models\Photoshooting;
use App\Models\Shelter;
use App\Models\User;
use Filament\Forms\Components\MorphToSelect;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;

class PhotoshootingResource extends Resource
{
    protected static ?string $model = Photoshooting::class;

    protected static ?string $navigationIcon = 'heroicon-o-camera';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MorphToSelect::make('photoshootingable')
                    ->label('Customer')
                    ->types([
                        MorphToSelect\Type::make(User::class)
                            ->titleAttribute('name')
                            ->modifyOptionsQueryUsing(fn (Builder $query) => $query->role('client'))
                            ,
                        MorphToSelect\Type::make(Shelter::class)
                            ->titleAttribute('name'),
                    ])
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('pets')
                    ->label('Pets')
                    ->multiple()
                    ->relationship(titleAttribute: 'name')
                    ->options(fn (Get $get): Collection => Pet::where('user_id', $get('photoshootingable_id'))->pluck('name', 'id'))
                    ->searchable()
                    ->preload()
                    ,
                // TODO: populate automatically when create photoshooting from appointment
                Select::make('appointment_id')
                    ->relationship(
                        name: 'appointment',
                        titleAttribute: 'appointmentable.name',
                        modifyQueryUsing: fn (Get $get, Builder $query) => $query->where('appointmentable_id', $get('photoshootingable_id'))
                            ->where('appointmentable_type', $get('photoshootingable_type'))
                            ->where('status', 'new')
                    )
                    ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->appointmentable->name} {$record->created_at}")
                    ->searchable()
                    ->preload()
                    ,
                Tabs::make('Tabs')
                    ->tabs([
                        Tabs\Tab::make('All photos')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('all')
                                    ->collection('default')
                                    ->multiple(),
                            ]),
                        Tabs\Tab::make('Client downloads')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('downloads')
                                    ->collection('downloads')
                                    ->multiple(),
                            ]),
                        Tabs\Tab::make('Tab 3')
                            ->schema([
                                // ...
                            ]),
                    ])
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('appointment.id')
                    ->label('Appointment ID'),
                TextColumn::make('photoshootingable.name')
                    ->label('Customer')
                    ->searchable(),
                TextColumn::make('pet.name')
                    ->label('Pet name')
                    ->searchable(),
                ImageColumn::make('pet.photo')
                    ->label('Pet photo'),
            ])
            ->defaultSort('created_at', 'desc')
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
//            RelationManagers\GalleriesRelationManager::class,
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
