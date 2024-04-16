<?php

namespace App\Livewire;

use App\Models\Social;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Actions\CreateAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Livewire\Component;

class ListSocials extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->heading('Socials')
            ->query(Social::query())
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('url'),
            ])
//            ->reorderable('sort')
            ->filters([
                // ...
            ])
            ->actions([
                EditAction::make()
                    ->form([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(125),
                        TextInput::make('url')
                            ->required(),
                    ]),
            ])
            ->headerActions([
                CreateAction::make()
                    ->form([
                        TextInput::make('title')
                            ->required()
                            ->maxLength(125),
                        TextInput::make('url')
                            ->required(),
                    ]),
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render()
    {
        return view('livewire.list-socials');
    }
}
