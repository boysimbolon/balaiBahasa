<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login');

Route::get('umum/register/', Register::class);


// Route untuk mahasiswa
// Route untuk mahasiswa
Route::view('/mahasiswa', 'home')
    ->middleware(['auth', 'mahasiswa']) // Middleware mahasiswa
    ->name('mahasiswa.dashboard'); // Nama rute mahasiswa dashboard

// Route untuk user umum
Route::view('/user', 'home')
    ->middleware(['auth', 'user', 'verified']) // Middleware user umum
    ->name('user.dashboard'); // Nama rute user dashboard


require __DIR__.'/auth.php';
