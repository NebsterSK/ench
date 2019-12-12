<?php

namespace App\Http\Controllers;

use App\Charts\MatsChart;
use App\Charts\TopEnchantsChart;
use App\Charts\CraftsPerDayChart;
use App\Enchant;
use Illuminate\Http\Request;
use App\Craft;
use DB;

class StatisticsController extends Controller {
    public function index() {

        // Top Enchants
        $arrTopEnchants = Enchant::withCount('crafts')
            ->having('crafts_count', '>', 0)
            ->orderBy('crafts_count', 'DESC')
            ->orderBy('name')
            ->limit(10)
            ->get();
        $objTopEnchantsChart = (new TopEnchantsChart($arrTopEnchants))->options([
            'scales' => [
                'xAxes' => [
                    [
                        'ticks' => [
                            'fontSize' => 10
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

        // Mats
        $arrMats = Craft::select(DB::raw('COALESCE(mats, \'not set\') AS mats, COUNT(ISNULL(mats)) AS count, ROUND(COUNT(ISNULL(mats)) / (SELECT COUNT(*) FROM crafts) * 100, 1) AS perc'))
            ->groupBy('mats')
            ->orderBy('count', 'DESC')
            ->get();
        $objMatsChart = new MatsChart($arrMats);

        // Crafts per day
        $arrCrafts = Craft::select(DB::raw('DATE(created_at) AS date, COUNT(created_at) AS count'))
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->limit(8)
            ->get();
        $objCraftsChart = new CraftsPerDayChart($arrCrafts->reverse());

        return view('statistics/index')->with([
            'objTopEnchantsChart' => $objTopEnchantsChart,
            'objMatsChart' => $objMatsChart,
            'arrMats' => $arrMats,
            'objCraftsChart' => $objCraftsChart
        ]);
    }
}
