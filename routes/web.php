<?php

use App\Http\Controllers\Auth\VerifyEmailController;

use App\Livewire\BiodataMhs;
use App\Livewire\BiodataUser;
use App\Livewire\Changepassword;
use App\Livewire\CreateRuangan;
use App\Livewire\CreateTipeUjian;
use App\Livewire\CreateUjian;
use App\Livewire\DashboardAdmin;
use App\Livewire\DashboardMhs;
use App\Livewire\DashboardUser;
use App\Livewire\E3Schedule;
use App\Livewire\EditBiodataAdmin;
use App\Livewire\EditBiodataUser;
use App\Livewire\EditRuanganUjian;
use App\Livewire\EditUjian;
use App\Livewire\History;
use App\Livewire\HistoryMhs;
use App\Livewire\ListUjian;
use App\Livewire\Pembayaran;
use App\Livewire\RuanganUjian;
use App\Livewire\TipeUjian;
use App\Livewire\ToeflSchedule;
use Illuminate\Support\Facades\Route;

// Grouping routes for user with prefix and middleware
Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/', DashboardUser::class)->name('dashboard-user');
    Route::get('/biodata', BiodataUser::class)->name('biodataUser');
    Route::get('/biodata_edit', EditBiodataUser::class)->name('edit-profile-user');
    Route::get('/change_password', Changepassword::class)->name('change-password-user');
    Route::get('/pembayaran', Pembayaran::class)->name('payment');
    Route::get('/e3_schedules',E3Schedule::class)->name('e3-schedule-user');
    Route::get('/toefl_schedules',ToeflSchedule::class)->name('toefl-schedule-user');
    Route::get('/history-user', History::class)->name('history-user');
});

// Grouping routes for mahasiswa with prefix and middleware
Route::prefix('mhs')->middleware('mhs')->group(function () {
    Route::get('/', DashboardMhs::class)->name('dashboard-mhs');
    Route::get('/biodata', BiodataMhs::class)->name('biodata-mhs');
    Route::get('/history-mhs', HistoryMhs::class)->name('history-mhs');
    Route::get('/e3_schedules', E3Schedule::class)->name('e3-schedule-mhs');
    Route::get('/pembayaran', Pembayaran::class)->name('payment-mhs');
    Route::get('/toefl_schedules',ToeflSchedule::class)->name('toefl-schedule-mhs');
});

// Grouping routes for admin with prefix and middleware
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', DashboardAdmin::class)->name('dashboard-admin');
    Route::get('/create_ruangan', CreateRuangan::class)->name('CreateRuangan');
    Route::get('/ruangan', RuanganUjian::class)->name('ListRuangan');
    Route::get('/edit_ruangan', EditRuanganUjian::class)->name('edit-ruang-ujian');
    Route::get('/create_ujian', CreateUjian::class)->name('CreateUjian');
    Route::get('/list_ujian', ListUjian::class)->name('ListUjian');
    Route::get('/edit_ujian', EditUjian::class)->name('edit-ujian');
    Route::get('/Createtipe_ujian',CreateTipeUjian::class)->name('CreateTipeUjian');
    Route::get('/tipe_ujian',TipeUjian::class)->name('ListTipeUjian');
    Route::get('/biodata', BiodataUser::class)->name('biodataAdmin');
    Route::get('/biodata_edit', EditBiodataAdmin::class)->name('edit-profile-admin');
    Route::get('/change_password', function () {
        return view('livewire.changepassword');
    })->name('change-password-admin');
    Route::get('/history-mhs', function () {
        return view('livewire.history-mhs');
    })->name('history-admin');
});

require __DIR__.'/auth.php';
