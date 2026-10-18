<?php
use App\Http\Controllers\CampGearController;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/', function () {
    return view('home');
})->name('home');

// Halaman Daftar Produk & Detail (Pastikan tidak ada baris route /gears yang duplikat di bawahnya)
Route::get('/gears', [CampGearController::class, 'index'])->name('gears.index');
Route::get('/gears/{id}', [CampGearController::class, 'show'])->name('gears.show');