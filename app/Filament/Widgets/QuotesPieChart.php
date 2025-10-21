<?php

namespace App\Filament\Widgets;

use App\Models\Quote;
use Filament\Widgets\PieChartWidget;

class QuotesPieChart extends PieChartWidget
{
    protected static ?string $heading = '📈 Répartition des devis par type de projet';

    protected function getData(): array
    {
        // Regrouper les devis par type de projet
        $data = Quote::selectRaw('project_type, COUNT(*) as total')
            ->groupBy('project_type')
            ->pluck('total', 'project_type');

        return [
            'datasets' => [
                [
                    'data' => $data->values(),
                    'backgroundColor' => [
                        '#007BFF', // Bleu Web
                        '#28A745', // Vert Mobile
                        '#FFC107', // Jaune IoT
                        '#6C757D', // Autres
                    ],
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $data->keys(),
        ];
    }
}
