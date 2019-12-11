<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enchant;
use App\Craft;
use App\Charts\TopEnchantsChart;

class DashboardController extends Controller {
    public function index() {

        // List of all Enchants
        $arrEnchants = Enchant::orderBy('name')->get();

        // Quick craft
        $arrTopEnchants = Enchant::withCount('crafts')
            ->having('crafts_count', '>', 0)
            ->orderBy('crafts_count', 'DESC')
            ->orderBy('name')
            ->limit(10)
            ->get();

        // Top Enchants
        $objChart = new TopEnchantsChart($arrTopEnchants);

        // Daily goal
        $intToday = Craft::whereDate('created_at', date('Y-m-d'))->count();

        // Recent crafts
        $arrRecentCrafts = Craft::orderBy('id', 'DESC')->limit(5)->get();

        return view('dashboard')->with([
            'arrEnchants' => $arrEnchants,
            'arrRecentCrafts' => $arrRecentCrafts,
            'arrTopEnchants' => $arrTopEnchants,
            'objChart' => $objChart,
            'intToday' => $intToday
        ]);
    }
}
