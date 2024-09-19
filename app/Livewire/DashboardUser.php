<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DashboardUser extends Component
{

    public function render()
    {
        return view('livewire.dashboard-user');
    }
}
