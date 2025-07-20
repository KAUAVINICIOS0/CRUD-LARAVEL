<?php

use App\Http\Controllers\CarBrandController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CAR BRAND
Route::get('/car-brands', [CarBrandController::class,'index']);

Route::get('/create-car-brand', [CarBrandController::class,'create']);

Route::post('/create-car-brand-action', [CarBrandController::class,'store']);

Route::get('update-car-brand/{carBrand}', [CarBrandController::class, 'edit'])->name('update-car-brand');

Route::put('/update-car-brand-action/{carBrand}', [CarBrandController::class, 'update'])->name('update-car-brand-action');

Route::delete('/delete-car-brand/{carBrand}', [CarBrandController::class, 'destroy'])->name('delete-car-brand');