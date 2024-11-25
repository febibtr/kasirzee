<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('dash', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('staff', [StaffController::class, 'index'])->name('staff.index');
    Route::get('staff/create', [StaffController::class, 'create'])->name('staff.create');
    Route::post('staff', [StaffController::class, 'store'])->name('staff.store');
    Route::get('staff/{id}', [StaffController::class, 'show'])->name('staff.show');
    Route::get('staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
    Route::put('staff/{id}', [StaffController::class, 'update'])->name('staff.update');
    Route::delete('staff/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');

    Route::get('kategori', [KategoriController::class, 'index'])->name('kategori.index');
});

require __DIR__ . '/auth.php';
