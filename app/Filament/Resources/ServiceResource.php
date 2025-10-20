<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Tables;
use Filament\Resources\Resource;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
    protected static ?string $navigationGroup = 'Contenu du site';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Titre du service')
                ->required()
                ->maxLength(255),
            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required()
                ->rows(4),
            Forms\Components\TextInput::make('price')
                ->label('Tarif')
                ->required()
                ->maxLength(50),
        ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')->label('Service')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('price')->label('Tarif'),
            Tables\Columns\TextColumn::make('updated_at')->label('Modifié le')->dateTime('d/m/Y H:i'),
        ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
