<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\StreetController;

// Rutas para Regiones
Route::get('regions', [RegionController::class, 'index']);
Route::post('regions', [RegionController::class, 'store']);
Route::put('regions/{id}', [RegionController::class, 'update']);
Route::delete('regions/{id}', [RegionController::class, 'destroy']);

// Rutas para Provincias
Route::get('provinces/{regionId}', [ProvinceController::class, 'index']);
Route::post('provinces', [ProvinceController::class, 'store']);
Route::put('provinces/{id}', [ProvinceController::class, 'update']);
Route::delete('provinces/{id}', [ProvinceController::class, 'destroy']);

// Rutas para Ciudades
Route::get('cities/{provinceId}', [CityController::class, 'index']);
Route::post('cities', [CityController::class, 'store']);
Route::put('cities/{id}', [CityController::class, 'update']);
Route::delete('cities/{id}', [CityController::class, 'destroy']);

// Rutas para Calles
Route::get('streets', [StreetController::class, 'indexAll']);
Route::get('streets/{cityId}', [StreetController::class, 'index']);
Route::post('streets', [StreetController::class, 'store']);
Route::put('streets/{id}', [StreetController::class, 'update']);
Route::delete('streets/{id}', [StreetController::class, 'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
