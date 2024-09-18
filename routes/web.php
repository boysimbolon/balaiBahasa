<?php

use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Livewire\DashboardMhs;
use App\Livewire\DashboardUser;
use App\Livewire\Forms\Register;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/mhs',DashboardMhs::class)->middleware(['mahasiswa']);
Route::get('/user',DashboardUser::class)->middleware(['user']);

require __DIR__.'/auth.php';
