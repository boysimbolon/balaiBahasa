<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardMhs extends Component
{

    public function render()
    {
        // Kembalikan view jika mahasiswa terautentikasi
        return view('livewire.dashboard-mhs');
    }
}
