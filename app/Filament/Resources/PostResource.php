<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;
    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    protected static ?string $navigationGroup = 'Contenu du site';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Titre')
                ->required()
                ->reactive()
                ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),

            Forms\Components\TextInput::make('slug')
                ->label('Slug')
                ->disabled()
                ->dehydrated(),

            Forms\Components\Textarea::make('excerpt')
                ->label('Résumé')
                ->rows(2),

            Forms\Components\FileUpload::make('image')
                ->label('Image de couverture')
                ->image()
                ->directory('posts'),

            Forms\Components\RichEditor::make('content')
                ->label('Contenu')
                ->required()
                ->toolbarButtons([
                    'bold', 'italic', 'underline', 'strike',
                    'link', 'orderedList', 'bulletList',
                    'blockquote', 'codeBlock', 'h2', 'h3', 'hr', 'undo', 'redo',
                ])
                ->columnSpanFull(),

            Forms\Components\TextInput::make('author')
                ->default('D-A Code Studio'),

            Forms\Components\DateTimePicker::make('published_at')
                ->label('Date de publication'),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('Image')->square(),
                Tables\Columns\TextColumn::make('title')->label('Titre')->searchable(),
                Tables\Columns\TextColumn::make('author')->label('Auteur'),
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Publié le')
                    ->dateTime('d/m/Y H:i'),
            ])
            ->defaultSort('published_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make(),
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
