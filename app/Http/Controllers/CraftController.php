<?php

namespace App\Http\Controllers;

use App\Enchant;
use Illuminate\Http\Request;
use App\Craft;
use App\Http\Requests\CraftStoreRequest;
use Auth;
use App\Events\CraftSaved;
use App\Events\CraftUpdated;
use App\Events\CraftDeleted;

class CraftController extends Controller {
    public function index() {
        $arrCrafts = Craft::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(25);

        return view('crafts/index')->with([
            'arrCrafts' => $arrCrafts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    public function store(CraftStoreRequest $request) {
        $objCraft = Craft::create($request->all());

        event(new CraftSaved($objCraft));

        toast('Craft added!','success');

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    public function edit(Craft $craft) {
        // List of all Enchants
        $arrEnchants = Enchant::orderBy('name')->get();
        $enchantGroups = [];
        foreach ($arrEnchants as $enchant) {
            $enchantGroups[explode(' - ', $enchant->name)[0]][] = $enchant;
        }

        return view('crafts/edit')->with([
            'craft' => $craft,
            'enchantGroups' => $enchantGroups
        ]);
    }

    public function update(CraftStoreRequest $request, Craft $craft) {
        $craft->update($request->all());

        event(new CraftUpdated($craft));

        toast('Craft edited!','success');

        return back();
    }

    public function destroy(Craft $craft) {
        $craft->delete();

        event(new CraftDeleted($craft));

        toast('Craft deleted!','success');

        return back();
    }
}
