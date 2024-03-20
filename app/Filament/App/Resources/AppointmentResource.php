<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use App\Models\User;
use Filament\Tables\Actions\CreateAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->live()
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                        $set('address','');
                        if ($state == 1) {
                            $set('address', 'Werdohl, Ruppenhahn 40');
                        }
                    })
                    ->required(),
                TextInput::make('address')
                    ->required(),
                Select::make('client_source_id')
                    ->relationship('client_source', 'name')
                    ->required(),
                Select::make('shelter_id')
                    ->relationship('shelter', 'name'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Appointment::query()->where('appointmentable_id', Auth::user()->getAuthIdentifier()))
            ->columns([
//                TextColumn::make('appointmentable.email')
//                    ->label(__('filament_ui.general.email'))
//                    ->searchable(),
//                TextColumn::make('appointmentable.name')
//                    ->label(__('filament_ui.general.name'))
//                    ->searchable(),
                TextColumn::make('category.name')
                    ->sortable(),
                TextColumn::make('address')
                    ->label(__('filament_ui.appointments.address'))
                    ->searchable(),
                TextColumn::make('shelter.name')
                    ->searchable(),
//                TextColumn::make('client_source.name')
//                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
                    ->label(__('filament_ui.general.status'))
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'info',
                        'confirmed' => 'warning',
                        'completed' => 'success',
                        'cancelled' => 'danger'
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'new' => 'heroicon-o-bell-alert',
                        'confirmed' => 'heroicon-o-camera',
                        'completed' => 'heroicon-o-check-badge',
                        'cancelled' => 'heroicon-o-x-circle'
                    })
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAppointments::route('/'),
        ];
    }
}
