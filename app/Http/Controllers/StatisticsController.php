<?php

namespace App\Http\Controllers;

use App\Charts\MatsChart;
use App\Charts\TopEnchantsChart;
use App\Charts\CraftsPerDayChart;
use App\Charts\SlotChart;
use App\Charts\ClassChart;
use App\Enchant;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Craft;
use DB;
use Auth;

class StatisticsController extends Controller {
    public function index() {

        // Top Enchants
        $arrTopEnchants = Enchant::withCount(['crafts' => function(Builder $query) {
                $query->where('user_id', Auth::user()->id);
            }])
            ->having('crafts_count', '>', 0)
            ->orderBy('crafts_count', 'DESC')
            ->orderBy('name')
            ->limit(8)
            ->get();
        $objTopEnchantsChart = new TopEnchantsChart($arrTopEnchants, 17);

        // Mats
        $arrMats = Craft::select(DB::raw('mats, COUNT(mats) AS count, ROUND(COUNT(mats) / (SELECT COUNT(*) FROM crafts WHERE user_id = ' . Auth::user()->id . ' AND mats IS NOT NULL) * 100, 1) AS perc'))
            ->ofUser()
            ->whereNotNull('mats')
            ->groupBy('mats')
            ->orderBy('count', 'DESC')
            ->get();
        $objMatsChart = new MatsChart($arrMats);

        // Crafts per day
        $arrCrafts = Craft::select(DB::raw('DATE(created_at) AS date, COUNT(created_at) AS count'))
            ->where('user_id', Auth::user()->id)
            ->groupBy('date')
            ->orderBy('date', 'DESC')
            ->limit(8)
            ->get();
        $objCraftsChart = new CraftsPerDayChart($arrCrafts);

        // Slots
        $arrSlots = Enchant::select(DB::raw('LEFT(name, LOCATE(\' - \', name) - 1) AS slot, COUNT(crafts.enchant_id) AS count, ROUND(COUNT(enchant_id) / (SELECT COUNT(*) FROM crafts WHERE user_id = ' . Auth::user()->id . ') * 100, 1) AS perc'))
            ->join('crafts', 'enchants.id', '=', 'crafts.enchant_id')
            ->where('crafts.user_id', Auth::user()->id)
            ->groupBy('slot')
            ->orderBy('count', 'DESC')
            ->orderBy('slot')
            ->get();
        $objSlotChart = new SlotChart($arrSlots);

        // Classes
        $arrClasses = Craft::select(DB::raw('class, COUNT(class) AS count, ROUND(COUNT(class) / (SELECT COUNT(class) FROM ench.crafts WHERE user_id = ' . Auth::user()->id . ' AND class IS NOT NULL) * 100, 1) AS perc'))
            ->ofUser()
            ->whereNotNull('class')
            ->groupBy('class')
            ->orderBy('count', 'DESC')
            ->orderBy('class')
            ->get();
        $objClassChart = new ClassChart($arrClasses);

        return view('statistics/index')->with([
            'objTopEnchantsChart' => $objTopEnchantsChart,
            'objMatsChart' => $objMatsChart,
            'arrMats' => $arrMats,
            'objCraftsChart' => $objCraftsChart,
            'objSlotChart' => $objSlotChart,
            'arrSlots' => $arrSlots,
            'arrClasses' => $arrClasses,
            'objClassChart' => $objClassChart
        ]);
    }
}
