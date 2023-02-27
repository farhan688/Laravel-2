<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MahasiswaController;

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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('/', 'home');
    Route::view('/about', 'about');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dosens', [DosenController::class, 'index'])->name('dosen');
    Route::get('/dosen/{id}', [DosenController::class, 'show'])->name('detail-dosen');
    Route::get('/dosen-add', [DosenController::class, 'create'])->name('dosen-add');
    Route::post('/dosen', [DosenController::class, 'store']);
    Route::get('/dosen-edit', [DosenController::class, 'edit']);

    Route::get('/mahasiswas', [MahasiswaController::class, 'index'])->name('mahasiswa');
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('detail-mahasiswa');
    Route::get('/mahasiswa-add', [MahasiswaController::class, 'create'])->name('mahasiswa-add');
    Route::post('/mahasiswa', [MahasiswaController::class, 'store']);
    Route::get('/mahasiswa-edit/{id}', [MahasiswaController::class, 'edit']);
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update']);
    Route::get('/mahasiswa-delete/{id}', [MahasiswaController::class, 'delete']);
    Route::delete('/mahasiswa-destroy/{id}', [MahasiswaController::class, 'destroy']);
    });

require __DIR__.'/auth.php';
