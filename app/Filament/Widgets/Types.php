<?php

namespace App\Filament\Widgets;

use App\Models\Type;
use Filament\Tables;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class Types extends BaseWidget
{
    protected static ?string $heading = 'Pet types';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Type::query()
            )
            ->columns([
                Split::make([
                    TextColumn::make('name'),
                ])
            ])
            ->contentGrid([
                'md' => 4,
                'xl' => 6,
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
}
