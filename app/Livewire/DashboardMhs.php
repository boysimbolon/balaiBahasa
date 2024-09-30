<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardMhs extends Component
{
    public function mount()
    {
        // Jika mahasiswa tidak terautentikasi, maka arahkan ke halaman login
        if (!session('guard') == 'mhs') {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk mahasiswa.');
        }
    }
    public function render()
    {
        // Kembalikan view jika mahasiswa terautentikasi
        return view('livewire.dashboard-mhs', [
            'title' => 'Dashboard Mahasiswa',
        ]);
    }
}
