<?php

use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login');
Route::get('umum/register/', Register::class);
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
use Illuminate\Support\Facades\Mail;

Route::get('/test-email', function () {
    Mail::raw('This is a test email.', function ($message) {
        $message->to('boyfull86@gmail.com')
            ->subject('Test Email');
    });
    return 'Test email sent!';
});



require __DIR__.'/auth.php';
