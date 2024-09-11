<?php

use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

Route::get('/', function () {
    return redirect()->route('login');
})->name('login');

Route::view('dashboard', 'dashboard')->name('dashboard');
Route::view('biodata', 'biodata')->name('biodata');
Route::view('edit_profile', 'edit-profile')->name('edit_profile');
Route::view('change_password', 'change-password')->name('change_password');
Route::view('e3_schedule', 'e3-schedule')->name('e3_schedule');
Route::view('toefl_schedule', 'toefl-schedule')->name('toefl_schedule');
Route::get('umum/register/', Register::class);

//Route::view('dashboard', 'dashboard')
//    ->middleware(['auth', 'verified'])
//    ->name('dashboard');

//Route::view('profile', 'profile')
//    ->middleware(['auth'])
//    ->name('profile');

Route::get('/test-email', function () {
    Mail::raw('This is a test email.', function ($message) {
        $message->to('boyfull86@gmail.com')
            ->subject('Test Email');
    });
    return 'Test email sent!';
});

require __DIR__.'/auth.php';
