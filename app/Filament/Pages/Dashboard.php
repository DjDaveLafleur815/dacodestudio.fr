<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\QuotesChart;
use App\Filament\Widgets\QuotesPieChart;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $title = 'Tableau de bord';
    protected static string $view = 'filament.pages.dashboard';

    // ✅ cette fois, on laisse la méthode en "public" comme Filament le demande
    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
            QuotesChart::class,
            QuotesPieChart::class,
        ];
    }
}
