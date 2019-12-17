<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enchant;
use App\Craft;
use App\Charts\TopEnchantsChart;
use Illuminate\Database\Eloquent\Builder;
use Auth;

class DashboardController extends Controller {
    public function index() {

        // List of all Enchants
        $arrEnchants = Enchant::orderBy('name')->get();

        // Quick craft
        $arrTopEnchants = Enchant::withCount(['crafts' => function(Builder $query) {
                $query->where('user_id', Auth::user()->id);
            }])
            ->having('crafts_count', '>', 0)
            ->orderBy('crafts_count', 'DESC')
            ->orderBy('name')
            ->limit(10)
            ->get();

        // Top Enchants
        $objChart = new TopEnchantsChart($arrTopEnchants);

        // Daily goal
        $intToday = Craft::where('user_id', Auth::user()->id)->whereDate('created_at', date('Y-m-d'))->count();

        // Recent crafts
        $arrRecentCrafts = Craft::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->limit(5)->get();

        return view('dashboard')->with([
            'arrEnchants' => $arrEnchants,
            'arrRecentCrafts' => $arrRecentCrafts,
            'arrTopEnchants' => $arrTopEnchants,
            'objChart' => $objChart,
            'intToday' => $intToday
        ]);
    }
}
