<?php

use App\Http\Controllers\Auth\VerifyEmailController;

use App\Livewire\Biodatamhs;
use App\Livewire\Biodatausr;
use App\Livewire\CreateRuangan;
use App\Livewire\CreateTipeUjian;
use App\Livewire\CreateUjian;
use App\Livewire\DashboardAdmin;
use App\Livewire\DashboardMhs;
use App\Livewire\DashboardUser;
use App\Livewire\E3schedule;
use App\Livewire\EditBiodataUser;
use App\Livewire\History;
use App\Livewire\HistoryMhs;
use App\Livewire\Toeflschedule;
use Illuminate\Support\Facades\Route;

// Grouping routes for user with prefix and middleware
Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/', DashboardUser::class)->name('dashboard-user');
    Route::get('/biodata', Biodatausr::class)->name('biodata-user');
    Route::get('/biodata_edit', EditBiodataUser::class)->name('edit-profile-user');
    Route::get('/change_password', function () {
        return view('livewire.changepassword');
    })->name('change-password-user');
    Route::get('/pembayaran', \App\Livewire\Pembayaran::class)->name('payment');
    Route::get('/e3_schedules',E3schedule::class)->name('e3-schedule-user');

    Route::get('/toefl_schedules',Toeflschedule::class)->name('toefl-schedule-user');

    Route::get('/history-user', History::class)->name('history-user');
});

// Grouping routes for mahasiswa with prefix and middleware
Route::prefix('mhs')->middleware('mhs')->group(function () {
    Route::get('/', DashboardMhs::class)->name('dashboard-mhs');
    Route::get('/biodata', Biodatamhs::class)->name('biodata-mhs');
    Route::get('/history-mhs', HistoryMhs::class)->name('history-mhs');
    Route::get('/e3_schedules', E3schedule::class)->name('e3-schedule-mhs');
    Route::get('/pembayaran', \App\Livewire\Pembayaran::class)->name('payment-mhs');
    Route::get('/toefl_schedules',Toeflschedule::class)->name('toefl-schedule-mhs');
});

// Grouping routes for admin with prefix and middleware
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', DashboardAdmin::class)->name('dashboard-admin');
    Route::get('/Ruangan', CreateRuangan::class)->name('CreateRuangan');

    Route::get('/Ujian', CreateUjian::class)->name('CreateUjian');

    Route::get('/tipe_ujian',CreateTipeUjian::class)->name('CreateTipeUjian');

    Route::get('/history-mhs', function () {
        return view('livewire.history-mhs');
    })->name('history-admin');
});

require __DIR__.'/auth.php';
