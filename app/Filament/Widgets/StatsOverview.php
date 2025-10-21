<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Quote;
use App\Models\Post;
use App\Models\Service;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('💰 Devis reçus', Quote::count())
                ->description('Demandes de devis totales')
                ->descriptionIcon('heroicon-o-document-text')
                ->color('success'),

            Card::make('📩 Messages reçus', Contact::count())
                ->description('Depuis la page contact')
                ->descriptionIcon('heroicon-o-envelope')
                ->color('info'),

            Card::make('📰 Articles publiés', Post::count())
                ->description('Contenu du blog en ligne')
                ->descriptionIcon('heroicon-o-newspaper')
                ->color('warning'),

            Card::make('💡 Services proposés', Service::count())
                ->description('Offres actives sur le site')
                ->descriptionIcon('heroicon-o-light-bulb')
                ->color('primary'),
        ];
    }
}
