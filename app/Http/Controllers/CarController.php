<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarBrand;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('car.index', [
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carBrands = CarBrand::all();
        return view('car.create', [
            'carBrands' => $carBrands,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:100', 'regex:/^[\pL\s\-]+$/u'],
            'color' => ['required', 'string', 'max:50', 'regex:/^[\pL\s\-]+$/u'],
            'price' => ['required', 'numeric', 'min:0'],
            'car_brand_id' => ['required', 'exists:car_brands,id'],
        ]);

        Car::create([
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price,
            'car_brand_id' => $request->car_brand_id,
        ]);
        return redirect('/cars');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        $carBrands = CarBrand::all();
        return view('car.update', [
            'car' => $car,
            'carBrands' => $carBrands,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:100', 'regex:/^[\pL\s\-]+$/u'],
            'color' => ['required', 'string', 'max:50', 'regex:/^[\pL\s\-]+$/u'],
            'price' => ['required', 'numeric', 'min:0'],
            'id_car_brand' => ['required', 'exists:car_brands,id'],
        ]);
        $car->update([
            'name' => $request->name,
            'color' => $request->color,
            'price' => $request->price,
            'id_car_brand' => $request->id_car_brand,
        ]);
        return redirect('/cars');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('cars');
    }
}
