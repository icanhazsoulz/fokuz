<?php

namespace App\Livewire;

use App\Models\Type;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class ListTypes extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Pet types')
            ->query(Type::query())
            ->columns([
                Stack::make([
                    TextColumn::make('name'),
                ])
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 4,
            ])
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()
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
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render()
    {
        return view('livewire.list-types');
    }
}
