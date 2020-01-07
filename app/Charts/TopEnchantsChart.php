<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class TopEnchantsChart extends Chart {
    public function __construct($arrTopEnchants, $chars = 17) {
        parent::__construct();

        // Make labels on two lines
        $arrLabels = [];
        foreach ($arrTopEnchants->pluck('name') as $name) {
            $helper = explode(' - ', $name);
            $helper[1] = (strlen($helper[1]) > $chars) ? rtrim(substr($helper[1],0,$chars - 3), ' ') . '...' : $helper[1];

            $arrLabels[] = $helper;
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
                            'fontSize' => 12
                        ]
                    ]
                ],
                'yAxes' => [
                    [
                        'ticks' => [
                            'fontSize' => 12
                        ]
                    ]
                ]
            ]
        ]);
    }
}
