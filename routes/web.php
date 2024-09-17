<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::view('dashboard', 'dashboard')
    ->middleware('auth:mahasiswa')
    ->name('dashboard');
Route::view('dashboard', 'dashboard')
    ->middleware('auth:user')
    ->name('dashboard');
Route::middleware(['auth:user'])->group(function () {
    Route::get('/usr/dashboard', [DashboardController::class, 'index'])->name('usr.dashboard');
});
Route::middleware(['auth:mahasiswa'])->group(function () {
    Route::get('/mhs/dashboard', [MahasiswaController::class, 'index'])->name('mhs.dashboard');
});



require __DIR__.'/auth.php';
