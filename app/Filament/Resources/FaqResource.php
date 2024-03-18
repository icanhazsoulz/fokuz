<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FaqResource\Pages;
use App\Models\Faq;
use App\Models\Post;
use Filament\Tables\Actions\Action;
use Filament\Forms;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FaqResource extends Resource
{
    protected static ?string $model = Faq::class;
    protected static ?string $navigationLabel = 'FAQs';
    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';
    protected static ?string $modelLabel = 'FAQ';
    protected static ?string $pluralModelLabel = 'FAQs';
    protected static ?string $navigationGroup = 'Content';

    public static function form(Form $form): Form
    {
        $default_link_label = __('filament_ui.faq.default_label');
        return $form
            ->schema([
                Textarea::make('question')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                RichEditor::make('answer')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Select::make('post_id')
                    ->label('Post link')
                    ->relationship('post', 'title')
                    ->options(Post::all()->pluck('title', 'id'))
                    ->live()
                    ->afterStateUpdated(fn (Set $set, ?string $state) => $set('link_label', $default_link_label))
                    ->suffixIcon('heroicon-m-globe-alt')
                    ->suffixIconColor('success')
                    ->preload()
                    ->searchable()
                    ->columnSpanFull(),
                Checkbox::make('status')
                    ->label('Published'),
                TextInput::make('link_label')
                    ->default($default_link_label),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->words(20)
                    ->wrap()
                    ->searchable(),
                TextColumn::make('answer')
                    ->words(40)
                    ->wrap()
                    ->html()
                    ->searchable(),
                TextColumn::make('post.title')
                    ->icon('heroicon-m-link')
                    ->iconColor('success')
                    ->wrap(),
                CheckboxColumn::make('status')
                    ->label('Published'),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->modalHeading('Delete record'),
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
