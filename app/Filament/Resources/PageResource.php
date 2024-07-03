<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('slug')
                    ->label('ID')
                    ->disabled(),
                Forms\Components\TextInput::make('title'),
                Forms\Components\TextInput::make('subtitle'),
                Forms\Components\Select::make('gallery_id')
                    ->relationship(
                        name: 'gallery',
                        titleAttribute: 'title',
                        modifyQueryUsing: fn (Builder $query) => $query->where('category', 'slider'),
                    )
                    ->preload()
                    ->searchable()
                    ,
                Forms\Components\Builder::make('layout')
                    ->blocks([
//                        Forms\Components\Builder\Block::make('slider')
//                            ->schema([
//
//                            ])
//                        ,
                        Forms\Components\Builder\Block::make('paragraph')
                            ->schema([
                                Forms\Components\Toggle::make('image_right'),
                                Forms\Components\ColorPicker::make('bg_color')
                                    ->label('Background color'),
                                FileUpload::make('image'),
                                RichEditor::make('content')
                                    ->required(),
                            ])
                            ->columns(2)
                    ])->columnSpanFull(),
                Forms\Components\Select::make('hero_background_color')
                    ->label('Hero Background Color')
                    ->options([
                        'red' => 'Red',
                        'green' => 'Green',
                        'yellow' => 'Yellow',
                        'purple' => 'Purple',
                    ])
                    ->nullable()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('slug')
                    ->label('ID'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('gallery.title'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->slideOver(),
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
            'index' => Pages\ManagePages::route('/'),
        ];
    }
}
