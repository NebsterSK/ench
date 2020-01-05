<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Craft;
use App\Http\Requests\CraftStoreRequest;
use Auth;
use App\Events\CraftSaved;
use App\Events\CraftDeleted;

class CraftController extends Controller {
    public function index() {
        $arrCrafts = Craft::where('user_id', Auth::user()->id)->orderBy('created_at', 'DESC')->paginate(20);

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    public function destroy(Craft $craft) {
        $craft->delete();

        event(new CraftDeleted($craft));

        toast('Craft deleted!','success');

        return back();
    }
}
