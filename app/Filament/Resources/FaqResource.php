<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Filament\Resources\FaqResource\RelationManagers;
use App\Models\Faq;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;

    protected static ?string $navigationLabel = 'FAQs';

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('question')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Textarea::make('answer')
                    ->required()
                    ->rows(5)
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Checkbox::make('status')
                    ->label('Published'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('question')
                    ->words(20)
                    ->wrap()
                    ->searchable(),
                Tables\Columns\TextColumn::make('answer')
                    ->words(40)
                    ->wrap()
                    ->searchable(),
                CheckboxColumn::make('status')
                    ->label('Published'),
            ])
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
            'index' => Pages\ManageFaqs::route('/'),
        ];
    }
}
