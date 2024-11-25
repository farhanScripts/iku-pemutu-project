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

Route::prefix('akreditasi-prodi')->name('akreditasi-prodi.')->group(function() {
    Route::get('daftar-prodi', function() {
        return view('dashboard');
    })->name('daftar-prodi');

    Route::prefix('daftar-prodi')->name('daftar-prodi.')->group(function() {
        Route::get('s1-{namaJurusan}', function($namaJurusan) {
            return view('#');
        })->name('s1');
        Route::get('s2-{namaJurusan}', function($namaJurusan) {
            return view('#');
        })->name('s2');
        Route::get('s3-{namaJurusan}', function($namaJurusan) {
            return view('#');
        })->name('s3');
        Route::get('d3-{namaJurusan}', function($namaJurusan) {
            return view('#');
        })->name('d3');

        Route::prefix('s1-{namaJurusan}')->name('s1.')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            })->name('metrik');
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            })->name('metrik-detail');
        });

        Route::prefix('s2-{namaJurusan}')->name('s2.')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            })->name('metrik');
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            })->name('metrik-detail');
        });

        Route::prefix('s3-{namaJurusan}')->name('s3.')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            })->name('metrik');
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            })->name('metrik-detail');
        });

        Route::prefix('d3-{namaJurusan}')->name('d3.')->group(function() {
            Route::get('metrik', function($namaJurusan) {
                return view('#');
            })->name('metrik');
            Route::get('metrik/detail/{id}', function($namaJurusan, $id) {
                return view('#');
            })->name('metrik-detail');
        });
    });
});


require __DIR__.'/auth.php';
