<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class CraftsPerDayChart extends Chart {
    public function __construct($arrCrafts) {
        parent::__construct();

        // Labels
        $arrLabels = [];
        foreach ($arrCrafts->pluck('date') as $label) {
            $arrLabels[] = date('D j.n.', strtotime($label));
        }
        $this->labels($arrLabels);

        $this->dataset('Count', 'line', $arrCrafts->pluck('count'))->options([
            'backgroundColor' => '#ffc107'
        ]);

        $this->displayLegend(false);
    }
}
