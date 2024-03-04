<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Category;
use App\Models\ClientSource;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
//                Select::make('user_id')
//                    ->label('Client')
//                    ->relationship(
//                        name: 'user',
//                        titleAttribute: 'full_name',
//                        modifyQueryUsing: fn (Builder $query) => $query->role('client'),
//                    ),
//                Select::make('category_id')
//                    ->relationship('category', 'name'),
//                Textarea::make('description')
//                    ->maxLength(65535)
//                    ->columnSpanFull(),
//                Select::make('client_source_id')
//                    ->relationship('client_source', 'name'),
//                Select::make('shelter_id')
//                    ->relationship('shelter', 'name'),
//                Select::make('status')
//                    ->options([
//                        'new' => 'New',
//                        'processing' => 'Processing',
//                        'completed' => 'Completed',
//                        'cancelled' => 'Cancelled'
//                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
//                TextColumn::make('photoshooting.photoshooting_uid')
//                    ->label('Shoot ID')
//                    ->limit(10)
//                    ->tooltip(function (TextColumn $column): ?string {
//                        $state = $column->getState();
//
//                        if (strlen($state) <= $column->getCharacterLimit()) {
//                            return null;
//                        }
//
//                        // Only render the tooltip if the column content exceeds the length limit.
//                        return $state;
//                    }),
//                TextColumn::make('user.full_name')
//                    ->label('Client')
//                    ->searchable(),
//                TextColumn::make('category.name')
//                    ->sortable(),
//                TextColumn::make('shelter.name')
//                    ->searchable(),
//                TextColumn::make('client_source.name')
//                    ->sortable(),
//                TextColumn::make('created_at')
//                    ->dateTime()
//                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true),
//                TextColumn::make('status')
//                    ->badge()
//                    ->color(fn (string $state): string => match ($state) {
//                        'new' => 'info',
//                        'processing' => 'warning',
//                        'completed' => 'success',
//                        'cancelled' => 'danger'
//                    })
//                    ->icon(fn (string $state): string => match ($state) {
//                        'new' => 'heroicon-o-bell-alert',
//                        'processing' => 'heroicon-o-camera',
//                        'completed' => 'heroicon-o-check-badge',
//                        'cancelled' => 'heroicon-o-x-circle'
//                    })
//                    ->sortable(),
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
