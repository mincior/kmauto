<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use App\Models\Department;
use Illuminate\Http\Request;


class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        // set permission
        $this->middleware('permission:fuel-list|fuel-create|fuel-edit|fuel-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:fuel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:fuel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:fuel-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $fuels = Fuel::all();
        return view('fuels.index', compact('fuels'))->with('i');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('fuels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([

        ]);

        $input = $request->all();


        Fuel::create($input);

        return redirect()->route('fuels.index')->with('success', 'Fuel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */

    public function show(Fuel $fuel)
    {
        return view('fuels.show', compact('fuel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */

    public function edit(Fuel $fuel)
    {
        return view('fuels.edit', compact('fuel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Fuel $fuel)
    {
        $request->validate([

        ]);

        $input = $request->all();
        $fuel->update($input);

        return redirect()->route('fuels.index')->with('success', 'Fuel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fuel $fuel)
    {
        $fuel->delete();
        return redirect()->route('fuels.index')->with('success', 'Fuel sters cu succes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fuel  $fuel
     * @return \Illuminate\Http\Response
     */
}
