<?php

use App\Http\Controllers\CarBrandController;
use App\Http\Controllers\CarController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');

// CAR BRAND
Route::get('/car-brands', [CarBrandController::class,'index'])->name('car-brands');

Route::get('/create-car-brand', [CarBrandController::class,'create']);

Route::post('/create-car-brand-action', [CarBrandController::class,'store']);

Route::get('update-car-brand/{carBrand}', [CarBrandController::class, 'edit'])->name('update-car-brand');

Route::put('/update-car-brand-action/{carBrand}', [CarBrandController::class, 'update'])->name('update-car-brand-action');

Route::delete('/delete-car-brand/{carBrand}', [CarBrandController::class, 'destroy'])->name('delete-car-brand');

// CARS

Route::get('/cars', [CarController::class, 'index'])->name('cars');

Route::get('/create-car', [CarController::class, 'create'])->name('create-car');

Route::post('/create-car-action', [CarController::class, 'store'])->name('create-car-action');

Route::get('/update-car/{car}', [CarController::class, 'edit'])->name('update-car');

Route::put('/update-car-action/{car}', [CarController::class, 'update'])->name('update-car-action');
Route::delete('/delete-car/{car}', [CarController::class, 'destroy'])->name('delete-car');