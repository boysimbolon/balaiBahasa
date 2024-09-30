<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardUser extends Component
{
    public $check = false;

    public function mount()
    {
        if (!Auth::guard('user')->check()) {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk Umum.');
        }
    }

    public function render()
    {  return view('livewire.dashboard-user', [
                'title' => 'Dashboard'
            ]);
    }
}
