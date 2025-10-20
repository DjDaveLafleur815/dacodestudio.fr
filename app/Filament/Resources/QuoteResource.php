<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Models\Quote;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;
    protected static ?string $navigationIcon = 'heroicon-o-currency-euro';
    protected static ?string $navigationGroup = 'Formulaires reçus';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')
                ->label('Nom du client')
                ->required()
                ->maxLength(100),

            Forms\Components\TextInput::make('email')
                ->label('Adresse e-mail')
                ->email()
                ->required(),

            Forms\Components\Select::make('project_type')
                ->label('Type de projet')
                ->options([
                    'Développement Web' => '🌐 Développement Web',
                    'Développement Mobile' => '📱 Développement Mobile',
                    'IoT / Domotique' => '🏠 IoT / Domotique',
                    'Autre' => '🔧 Autre',
                ])
                ->required(),

            Forms\Components\TextInput::make('budget')
                ->label('Budget estimé')
                ->placeholder('Ex: 1000 € - 2000 €'),

            Forms\Components\TextInput::make('deadline')
                ->label('Délai souhaité')
                ->placeholder('Ex: 1 à 2 mois'),

            Forms\Components\Textarea::make('user_message')
                ->label('Message / Description du projet')
                ->rows(4)
                ->required(),

            Forms\Components\Select::make('status')
                ->label('Statut du devis')
                ->options([
                    'En attente' => '🕓 En attente',
                    'Envoyé' => '📤 Envoyé',
                    'Accepté' => '✅ Accepté',
                    'Refusé' => '❌ Refusé',
                ])
                ->default('En attente')
                ->required(),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nom')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\TextColumn::make('project_type')->label('Type'),
            Tables\Columns\TextColumn::make('budget')->label('Budget'),
            Tables\Columns\TextColumn::make('deadline')->label('Délai'),
            Tables\Columns\TextColumn::make('created_at')->label('Reçu le')->dateTime('d/m/Y H:i'),
        ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('pdf')
                    ->label('Télécharger PDF')
                    ->icon('heroicon-o-document-text')
                    ->url(fn ($record) => route('admin.quotes.pdf', $record->id))
                    ->openUrlInNewTab(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuotes::route('/'),
            'create' => Pages\CreateQuote::route('/create'),
            'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }
}
