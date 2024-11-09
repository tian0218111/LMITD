<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LMITDController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk halaman utama lmitd
Route::get('/lmitd', [LMITDController::class, 'index']);

// Rute untuk halaman sejarah
Route::prefix('lmitd')->group(function () {
    Route::get('sejarah', [LMITDController::class, 'sejarah'])->name('sejarah');
    Route::get('tugas', [LMITDController::class, 'tugas'])->name('tugas');
    Route::get('struktur', [LMITDController::class, 'struktur'])->name('struktur');
});

Route::prefix('admin')->group(function () {
    // Sejarah Routes
    Route::get('/sejarah/create', [AdminController::class, 'createSejarah'])->name('admin.sejarah.create');
    Route::post('/sejarah', [AdminController::class, 'storeSejarah'])->name('admin.sejarah.store');
    Route::get('/sejarah/{id}/edit', [AdminController::class, 'editSejarah'])->name('admin.sejarah.edit');
    Route::put('/sejarah/{id}', [AdminController::class, 'updateSejarah'])->name('admin.sejarah.update');
    Route::delete('/sejarah/{id}', [AdminController::class, 'destroySejarah'])->name('admin.sejarah.destroy');
    Route::get('/sejarah', [AdminController::class, 'indexSejarah'])->name('admin.sejarah.index');

    // Layanan Routes (Contoh)
    Route::get('/layanan/create', [AdminController::class, 'createLayanan'])->name('admin.layanan.create');
    Route::post('/layanan', [AdminController::class, 'storeLayanan'])->name('admin.layanan.store');
    Route::get('/layanan/{id}/edit', [AdminController::class, 'editLayanan'])->name('admin.layanan.edit');
    Route::put('/layanan/{id}', [AdminController::class, 'updateLayanan'])->name('admin.layanan.update');
    Route::delete('/layanan/{id}', [AdminController::class, 'destroyLayanan'])->name('admin.layanan.destroy');
    Route::get('/layanan', [AdminController::class, 'indexLayanan'])->name('admin.layanan.index');
});
