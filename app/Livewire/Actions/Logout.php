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
        if (session('guard') == 'mhs') {
            Auth::guard('mhs')->logout();
            Session::flush();
        } elseif (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
            Session::flush();
        }elseif (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
            Session::flush();
        }
        session()->invalidate();
        session()->regenerateToken();
    }
}
