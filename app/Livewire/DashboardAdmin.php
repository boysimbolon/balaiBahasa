<?php

namespace App\Livewire;

use App\Models\data_user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public $data, $auth, $foto;

    public function mount()
    {
        if (!Auth::guard('admin')->check()) {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk Admin.');
        }
        // Pastikan Auth user t ersedia dan memiliki no_Peserta
        $authUser = Auth::guard('user')->user();
        $authAdmin = Auth::guard('admin')->user();
        if ($authAdmin && $authAdmin->no_Peserta) {
            $this->data = data_user::where('no_Peserta', $authAdmin->no_Peserta)->first();
            $this->auth = 'admin';
        }
    }

    public function render()
    {
        return view('livewire.dashboard-admin',[
            'title' => 'Dashboard Admin'
        ]);
    }
}
