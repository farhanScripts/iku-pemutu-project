<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('akreditasi-univ')->name('akreditasi-univ.')->group(function() {
    Route::get('/', function () {
        return view('pemutu-univ.index');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('/telusur-data', function() {
            return view('admin.telusur-data.index');
        })->name('telusur-data')->middleware('role:admin');

        Route::get('/telusur-data/iku3', function() {
            return view('admin.telusur-data.IKU3.dsn_penelitian');
        })->name('telusur-data.iku3')->middleware('role:admin');
    });
});



require __DIR__.'/auth.php';
