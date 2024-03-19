<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
//use App\Filament\Resources\MessageResource\RelationManagers;
use App\Models\Message;
use App\Models\User;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    protected static ?string $navigationBadgeTooltip = 'New messages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label(__('filament_ui.messages.sender'))
                    ->searchable(),
                TextColumn::make('user.email')
                    ->label(__('filament_ui.general.email'))
                    ->searchable(),
                TextColumn::make('user.phone')
                    ->label(__('filament_ui.general.phone')),
                TextColumn::make('message')
                    ->label(__('filament_ui.messages.message'))
                    ->words(20)
                    ->wrap()
                    ->searchable(),
                IconColumn::make('status')
                    ->label(__('filament_ui.general.status'))
                    ->boolean()
                    ->trueIcon('heroicon-o-envelope-open')
                    ->falseIcon('heroicon-s-envelope')
                    ->trueColor('gray')
                    ->falseColor('success')
                    ,
                TextColumn::make('created_at')
                    ->dateTime('d-m-Y h:i:A')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Action::make('read')
                    ->label(__('filament_ui.messages.read'))
                    ->modalHeading(__('filament_ui.messages.message'))
                    ->modalSubmitActionLabel(__('filament_ui.messages.mark'))
                    ->link()
                    ->icon('heroicon-s-newspaper')
                    ->color('primary')
                    ->fillForm(fn (Message $record): array => [
                        'name' => $record->user->name,
                        'email' => $record->user->email,
                        'phone' => $record->user->phone,
                        'message' => $record->message,
                    ])
                    ->form([
                        TextInput::make('name')
                            ->label(__('filament_ui.messages.sender'))
                        ,
                        TextInput::make('email')
                            ->label(__('filament_ui.general.email'))
                            ->columnSpan('sm')
                        ,
                        TextInput::make('phone')
                            ->label(__('filament_ui.general.phone'))
                        ,
                        Textarea::make('message')
                            ->label(__('filament_ui.messages.message'))
                            ->rows(10)
                            ->maxLength(65535)
                        ,
                    ])
                    ->disabledForm()
                    ->action(function (array $data, Message $record): void {
                        $record->update(['status' => 1]);
                    })
//                    ->requiresConfirmation()
//                    ->action(fn (Message $record) => $record->update(['status' => 1]))
//                    ->action(fn (Message $record) => $record->delete())
                ,
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
//                    MarkAsReadAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageMessages::route('/'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 0)->count();
    }
}
