<?php

use App\Http\Controllers\DeliveryBumdesController;
use App\Http\Controllers\FarmerDetailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//kategori
Route::get('/kategori', function () {
    return view('kategori');
})->middleware(['auth', 'verified'])->name('kategori');

Route::middleware('auth')->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('farmer_detail', FarmerDetailController::class);
    Route::resource('delivery_bumdes', DeliveryBumdesController::class);

    Route::get('/master', function() {
        return view('layouts.master');
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
