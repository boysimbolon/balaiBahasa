<?php

namespace App\Livewire\Actions;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout
{
    /**
     * Log the current user out of the application.
     */
    public function __invoke(): void
    {

        if (auth()->guard('mahasiswa')->check()) {
            auth()->guard('mahasiswa')->logout();
        } elseif (auth()->guard('user')->check()) {
            auth()->guard('user')->logout();
        }

        session()->invalidate();
        session()->regenerateToken();
    }
}
