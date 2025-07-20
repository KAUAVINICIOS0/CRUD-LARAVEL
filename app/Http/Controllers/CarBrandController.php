<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $car_brands = CarBrand::all();
        return view('carbrand.index', compact('car_brands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('carbrand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CarBrand::create([
            'name' => $request->name,
            'creation_year' => $request->creation_year,
        ]);
        return redirect('/car-brands');
    }

    /**
     * Display the specified resource.
     */
    public function show(CarBrand $carBrand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarBrand $carBrand)
    {
        return view('carbrand.update', [
            'carBrand' => $carBrand,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarBrand $carBrand)
    {
        $carBrand->update([
        'name' => $request->name,
        'creation_year' => $request->creation_year,
    ]);
        return redirect('/car-brands');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarBrand $carBrand)
    {
        //
    }
}
