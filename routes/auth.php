<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::middleware('guest')->group(function () {
    Volt::route('register', 'pages.auth.register')
        ->name('register');

    Volt::route('login', 'pages.auth.login')
        ->name('login');

    Volt::route('forgot-password', 'pages.auth.forgot-password')
        ->name('password.request');

    Volt::route('reset-password/{token}', 'pages.auth.reset-password')
        ->name('password.reset');
});

// Routes for email verification and authentication
Route::middleware('auth')->group(function () {
    // Verification Notice Route
    Route::get('/', function () {
        return view('livewire.pages.auth.login');
    })->name('verification.notice');

    // Email Verification Route
    // Confirm Password Route
    Route::get('confirm-password', function () {
        return view('auth.confirm-password'); // Or use Volt::route() if appropriate
    })->name('password.confirm');
});
    Route::get('verify-email/{token}', [VerifyEmailController::class, 'verify'])
        ->middleware('throttle:6,1')
        ->name('verification.verify');
