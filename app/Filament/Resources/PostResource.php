<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Contenu du site';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Titre de l’article')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('slug')
                ->label('Slug (url)')
                ->required()
                ->unique(ignoreRecord: true),

            Forms\Components\FileUpload::make('image')
                ->label('Image principale')
                ->directory('blog-images')
                ->image(),

            Forms\Components\Textarea::make('excerpt')
                ->label('Résumé')
                ->rows(3)
                ->maxLength(500),

            Forms\Components\RichEditor::make('content')
                ->label('Contenu complet')
                ->required()
                ->columnSpanFull(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('image')->label('Image'),
            Tables\Columns\TextColumn::make('title')->label('Titre')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('slug')->label('Slug'),
            Tables\Columns\TextColumn::make('updated_at')->label('Modifié le')->dateTime('d/m/Y H:i'),
        ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
