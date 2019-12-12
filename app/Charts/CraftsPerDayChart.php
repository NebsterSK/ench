<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class CraftsPerDayChart extends Chart {
    public function __construct($arrCrafts) {
        parent::__construct();

        // Labels & value manipulation
        $arrLabels = [];
        $dates = [];
        $values = [];

        for ($i = 0; $i < 8; $i++) {
            $dates[] = $date = date('Y-m-d', strtotime('-' . $i . ' DAY', time()));

            if ($arrCrafts->where('date', $date)->count() > 0) $values[] = $arrCrafts->where('date', $date)->first()->count;
            else $values[] = 0;
        }

        // Label format
        foreach (array_reverse($dates) as $label) {
            $arrLabels[] = date('D j.n.', strtotime($label));
        }
        $this->labels($arrLabels);

        $this->dataset('Count', 'line', array_reverse($values))->options([
            'backgroundColor' => '#ffc107'
        ]);

        $this->displayLegend(false);
    }
}
