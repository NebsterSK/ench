<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class MatsChart extends Chart {
    public function __construct($arrMats) {
        parent::__construct();

        $arrLabels = [];
        foreach ($arrMats as $mat) {
            $arrLabels[] = ucfirst($mat['mats']);
        }

        $this->labels($arrLabels);

        $this->dataset('Count', 'pie', $arrMats->pluck('count'))->options([
            'backgroundColor' => ['#ffa000', '#ffc107', '#ffecb3']
        ]);

        $this->displayAxes(false);
        $this->displayLegend(false);
    }
}
