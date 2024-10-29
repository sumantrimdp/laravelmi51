<?php

use App\Http\Controllers\KomputerController;
use App\Http\Controllers\RuangController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/ruang', [RuangController::class, 'getRuang']);
Route::post('/ruang', [RuangController::class, 'storeRuang']);
Route::get('/komputer', [KomputerController::class, 'getKomputer']);
Route::post('/komputer', [KomputerController::class, 'storeKomputer']);