<?php

use App\Http\Controllers\KomputerController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RuangController;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return redirect('ruang');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route ::resource('/ruang', RuangController::class)->middleware(['auth', 'verified']);
Route ::resource('/komputer', KomputerController::class)->middleware(['auth', 'verified']);
Route ::resource('/komputer', KomputerController::class)->middleware(['auth', 'verified']);
Route ::resource('/peminjaman', PeminjamanController::class);

require __DIR__.'/auth.php';
