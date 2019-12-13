<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class SlotChart extends Chart {
    public function __construct($arrSlots) {
        parent::__construct();

        $this->labels($arrSlots->pluck('slot'));

        $this->dataset('Count', 'doughnut', $arrSlots->pluck('count'))->options([
            'backgroundColor' => ['#ffa000', '#ffc107', '#ffecb3']
        ]);

        $this->displayAxes(false);
        $this->displayLegend(false);
    }
}
