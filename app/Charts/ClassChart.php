<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class ClassChart extends Chart {
    public function __construct($arrClasses) {
        parent::__construct();

        $arrLabels = $arrClasses->pluck('class');
        foreach ($arrLabels as $i => $label) {
            $arrLabels[$i] = ucfirst($label);
        }
        $this->labels($arrLabels);

        $this->dataset('Count', 'doughnut', $arrClasses->pluck('count'))->options([
            'backgroundColor' => ['#ffa000', '#ffc107', '#ffecb3']
        ]);

        $this->displayAxes(false);
        $this->displayLegend(false);
    }
}
