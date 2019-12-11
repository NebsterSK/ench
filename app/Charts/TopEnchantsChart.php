<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class TopEnchantsChart extends Chart {
    public function __construct($arrTopEnchants) {
        parent::__construct();

        $arrLabels = [];
        foreach ($arrTopEnchants->pluck('name') as $name) {
            $arrLabels[] = explode(' - ', $name);
        }

        $this->labels($arrLabels);
        $this->dataset('Count', 'bar', $arrTopEnchants->pluck('crafts_count'))->options([
            'backgroundColor' => '#ffc107'
        ]);
        $this->displayLegend(false);
        $this->options([
            'scales' => [
                'xAxes' => [
                        [
                        'ticks' => [
                            'fontSize' => 8
                        ]
                    ]
                ],
                'yAxes' => [
                    [
                        'ticks' => [
                            'fontSize' => 10
                        ]
                    ]
                ]
            ]
        ]);
    }
}
