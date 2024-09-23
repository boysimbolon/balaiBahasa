<?php

use App\Http\Controllers\Auth\VerifyEmailController;

use App\Livewire\Biodatausr;
use App\Livewire\DashboardMhs;
use App\Livewire\DashboardUser;
use App\Livewire\Forms\Login;
use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Grouping routes for mahasiswa with prefix and middleware

// Grouping routes for user with prefix and middleware
Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/', DashboardUser::class)->name('dashboard-user');
    Route::get('/biodata', Biodatausr::class)->name('biodata-user');

    Route::get('/biodata_edit', function () {
        return view('livewire.editprofile');
    })->name('edit-profile-user');

    Route::get('/change_password', function () {
        return view('livewire.changepassword');
    })->name('change-password-user');

    Route::get('/e3_schedules', function () {
        return view('livewire.e3schedule');
    })->name('e3-schedule-user');

    Route::get('/toefl_schedules', function () {
        return view('livewire.toeflschedule');
    })->name('toefl-schedule-user');

    Route::get('/history-mhs', function () {
        return view('livewire.history');
    })->name('history-user');
});


Route::prefix('mhs')->middleware('mhs')->group(function () {
    Route::get('/', DashboardMhs::class)->name('dashboard-mhs');

    Route::get('/biodata', function () {
        return view('livewire.biodata-mhs');
    })->name('biodata-mhs');

    Route::get('/biodata_edit', function () {
        return view('livewire.edit-profile-mhs');
    })->name('edit-profile-mhs');

    Route::get('/change_password', function () {
        return view('livewire.change-password-mhs');
    })->name('change-password-mhs');

    Route::get('/e3_schedules', function () {
        return view('livewire.e3-schedule-mhs');
    })->name('e3-schedule-mhs');

    Route::get('/toefl_schedules', function () {
        return view('livewire.toefl-schedule-mhs');
    })->name('toefl-schedule-mhs');

    Route::get('/history-mhs', function () {
        return view('livewire.history-mhs');
    })->name('history-mhs');
});


require __DIR__.'/auth.php';
