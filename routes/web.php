<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login');

Route::get('umum/register/', Register::class);



require __DIR__.'/auth.php';
