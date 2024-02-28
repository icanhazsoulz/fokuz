<?php

namespace App\Filament\Widgets;

use App\Models\ClientSource;
use Filament\Forms\Components\TextInput;
use Filament\Tables;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class ClientSources extends BaseWidget
{
    public function table(Table $table): Table
    {
        return $table
            ->query(
                ClientSource::query()
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
                Tables\Actions\EditAction::make()
                    ->form([
                        TextInput::make('key')
                            ->required()
                            ->maxLength(125),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(125),
                    ]),
            ])
            ->headerActions([
                CreateAction::make()
                    ->form([
                        TextInput::make('key')
                            ->required()
                            ->maxLength(125),
                        TextInput::make('name')
                            ->required()
                            ->maxLength(125),
                    ]),
            ]);
    }
}
