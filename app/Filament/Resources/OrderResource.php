<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'email')
                    ->label('Client'),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(125),
                Forms\Components\Textarea::make('description')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('client_source')
                    ->maxLength(125),
                Forms\Components\Select::make('shelter_id')
                    ->relationship('shelter', 'name'),
                Checkbox::make('status')
                    ->label('Completed'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.first_name')
                    ->label('First name')
                    ->searchable(),
                TextColumn::make('user.last_name')
                    ->label('Last name')
                    ->searchable(),
                TextColumn::make('category')
                    ->sortable(),
                TextColumn::make('shelter.name')
                    ->searchable(),
                TextColumn::make('client_source')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                CheckboxColumn::make('status')
                    ->label('Completed')
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                SelectFilter::make('category')
                    ->options([
                        'cats' => 'Katzen',
                        'dogs' => 'Hunde',
                        'small_animals' => 'Kleintiere'
                    ]),
                SelectFilter::make('client_source')
                    ->options([
                        'web_search' => 'Internet search',
                        'recommendation' => 'Friend recommendation',
                        'facebook_ads' => 'Facebook ads',
                        'other_ads' => 'Other ads',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ManageOrders::route('/'),
        ];
    }
}
