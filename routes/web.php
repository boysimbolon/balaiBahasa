<?php

use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('biodata', 'biodata')->name('biodata');
Route::view('edit_profile', 'edit-profile')->name('edit_profile');

Route::get('umum/register/', Register::class);

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
