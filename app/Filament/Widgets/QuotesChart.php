<?php

namespace App\Filament\Widgets;

use App\Models\Quote;
use Filament\Widgets\LineChartWidget;
use Carbon\Carbon;

class QuotesChart extends LineChartWidget
{
    protected static ?string $heading = '📊 Évolution des devis (7 derniers jours)';

    protected function getData(): array
    {
        $labels = [];
        $data = [];

        // Boucle sur les 7 derniers jours
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $labels[] = $date->format('d/m');

            // On compare en format date simple, sans ->format()
            $count = Quote::whereDate('created_at', $date->toDateString())->count();

            $data[] = $count;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Devis reçus',
                    'data' => $data,
                    'borderColor' => '#007BFF',
                    'backgroundColor' => 'rgba(0,123,255,0.2)',
                    'fill' => true,
                    'tension' => 0.3, // légère courbe
                ],
            ],
            'labels' => $labels,
        ];
    }
}
