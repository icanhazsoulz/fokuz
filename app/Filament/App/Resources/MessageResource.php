<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationBadgeTooltip = 'New messages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('message')
                    ->rows(10)
                    ->label(__('filament_ui.messages.message'))
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->query(Message::query()->where('user_id', \Auth::id()))
            ->columns([
                TextColumn::make('message')
                    ->label(__('filament_ui.messages.message'))
                    ->words(100)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y h:i:A')
                    ->sortable()
//                    ->toggleable(isToggledHiddenByDefault: true)
                ,
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
//                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ManageMessages::route('/'),
        ];
    }
}
