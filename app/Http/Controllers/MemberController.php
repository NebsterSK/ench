<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enchant;
use App\Craft;
use App\Charts\TopEnchantsChart;

class MemberController extends Controller {
    public function dashboard() {
        $arrEnchants = Enchant::orderBy('name')->get();

        // Quick craft
        $arrTopEnchants = Enchant::withCount('crafts')
            ->having('crafts_count', '>', 0)
            ->orderBy('crafts_count', 'DESC')
            ->orderBy('name')
            ->limit(8)
            ->get();

        // Top Enchants
        $objChart = new TopEnchantsChart($arrTopEnchants);

        // Log
        $arrRecentCrafts = Craft::orderBy('id', 'DESC')->limit(10)->get();

        return view('dashboard')->with([
            'arrEnchants' => $arrEnchants,
            'arrRecentCrafts' => $arrRecentCrafts,
            'arrTopEnchants' => $arrTopEnchants,
            'objChart' => $objChart
        ]);
    }
}
