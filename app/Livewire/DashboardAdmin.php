<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public function mount()
    {
        if (!Auth::guard('admin')->check()) {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk Admin.');
        }
    }
    public function render()
    {
        return view('livewire.dashboard-admin',[
            'title' => 'Dashboard Admin'
        ]);
    }
}
