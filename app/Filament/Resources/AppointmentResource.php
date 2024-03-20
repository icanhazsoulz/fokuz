<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AppointmentResource\Pages;
use App\Models\Appointment;
use App\Models\Category;
use App\Models\ClientSource;
use App\Models\Shelter;
use App\Models\User;
use Filament\Forms\Components\MorphToSelect;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class AppointmentResource extends Resource
{
    protected static ?string $model = Appointment::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    protected static ?string $navigationBadgeTooltip = 'New appointments';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Error: Did you mean Illuminate\Database\Eloquent\Relations\HasOne::getForeignKeyName()?
//                Select::make('photoshooting_id')
//                    ->label('Photoshooting ID')
//                    ->relationship('photoshooting', 'photoshooting_uid'),
                MorphToSelect::make('appointmentable')
                    ->label('Customer')
                    ->types([
                        MorphToSelect\Type::make(User::class)
                            ->titleAttribute('name')
                            ->modifyOptionsQueryUsing(fn (Builder $query) => $query->role('client')),
                        MorphToSelect\Type::make(Shelter::class)
                            ->titleAttribute('name'),
                    ])
                    ->searchable()
                    ->preload()
                    ->required(),
                Textarea::make('description')
                    ->maxLength(65535),
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
                    ->relationship('client_source', 'name'),
                Select::make('shelter_id')
                    ->relationship('shelter', 'name'),
                Radio::make('status')
                    ->options([
                        'new' => __('filament_ui.appointments.status.new'),
                        'confirmed' => __('filament_ui.appointments.status.confirmed'),
                        'completed' => __('filament_ui.appointments.status.completed'),
                        'cancelled' => __('filament_ui.appointments.status.cancelled')
                    ])
                    ->inline()
                    ->inlineLabel(false)
                    ->default('new'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                TextColumn::make('photoshooting.id')
//                    ->label('Shoot ID'),
                TextColumn::make('appointmentable.email')
                    ->label('Email')
                    ->searchable(),
                TextColumn::make('appointmentable.name')
                    ->label('Customer')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->sortable(),
                TextColumn::make('address')
                    ->searchable(),
//                TextColumn::make('shelter.name')
//                    ->searchable(),
//                TextColumn::make('client_source.name')
//                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('status')
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
                SelectFilter::make('category_id')
                    ->label('Category')
                    ->options(Category::all()->pluck('name', 'id')),
                SelectFilter::make('client_source_id')
                    ->label('Client Source')
                    ->options(ClientSource::all()->pluck('name', 'id')),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('createPhotoshooting')
                        ->url(fn (Appointment $record): string => route('filament.admin.resources.photoshootings.create', [
                            'appointment' => $record,
                        ]))
                        ->openUrlInNewTab()
                        ->hidden(fn (Appointment $record): bool => $record->status !== 'new')
                        ->icon('heroicon-o-camera')
                        ->color('success')
                        ->action(function (array $args) {

                    })
                    ,
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ])
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

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'new')->count();
    }
}
