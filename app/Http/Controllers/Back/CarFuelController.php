<?php

namespace App\Http\Controllers;

use App\Models\CarFuel;
use App\Models\Department;
use Illuminate\Http\Request;


class CarFuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        // set permission
        $this->middleware('permission:carFuel-list|carFuel-create|carFuel-edit|carFuel-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:carFuel-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:carFuel-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:carFuel-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $carFuels = CarFuel::all();
        return view('carFuels.index', compact('carFuels'))->with('i');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('carFuels.create');
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


        CarFuel::create($input);

        return redirect()->route('carFuels.index')->with('success', 'CarFuel created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CarFuel  $carFuel
     * @return \Illuminate\Http\Response
     */

    public function show(CarFuel $carFuel)
    {
        return view('carFuels.show', compact('carFuel'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CarFuel  $carFuel
     * @return \Illuminate\Http\Response
     */

    public function edit(CarFuel $carFuel)
    {
        return view('carFuels.edit', compact('carFuel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CarFuel  $carFuel
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, CarFuel $carFuel)
    {
        $request->validate([

        ]);

        $input = $request->all();
        $carFuel->update($input);

        return redirect()->route('carFuels.index')->with('success', 'CarFuel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarFuel  $carFuel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarFuel $carFuel)
    {
        $carFuel->delete();
        return redirect()->route('carFuels.index')->with('success', 'CarFuel sters cu succes');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CarFuel  $carFuel
     * @return \Illuminate\Http\Response
     */
}
