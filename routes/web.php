<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('akreditasi-prodi')->group(function() {
    Route::get('daftar-prodi', function() {
        return view('#');
    });

    Route::prefix('daftar-prodi')->group(function() {
        Route::get('s1-{namaJurusan}', function($namaJurusan) {
            return view('#');
        });
        Route::get('s2-{namaJurusan}', function($namaJurusan) {
            return view('#');
        });
        Route::get('s3-{namaJurusan}', function($namaJurusan) {
            return view('#');
        });
        Route::get('d3-{namaJurusan}', function($namaJurusan) {
            return view('#');
        });

        Route::prefix('s1-{namaJurusan}')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            });
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            });
        });

        Route::prefix('s2-{namaJurusan}')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            });
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            });
        });

        Route::prefix('s3-{namaJurusan}')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            });
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            });
        });

        Route::prefix('d3-{namaJurusan}')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            });
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            });
        });
    });
});

require __DIR__.'/auth.php';
