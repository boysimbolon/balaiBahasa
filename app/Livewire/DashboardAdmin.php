<?php

namespace App\Livewire;

use App\Models\Data_User;
use App\Models\list_ruangan;
use App\Models\tipe_ujian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardAdmin extends Component
{
    public $data, $auth, $foto, $ruangan_ujians, $tipe_ujians, $users, $data_user, $all_data_user;

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
            $this->data = Data_User::where('no_Peserta', $authAdmin->no_Peserta)->first();
            $this->auth = 'admin';
        }

        $this->ruangan_ujians = list_ruangan::all();
        $this->tipe_ujians = tipe_ujian::all();
        $this->users = User::all();
        $this->data_user = Data_User::all();
        $this->all_data_user = User::join('data_users', 'users.no_peserta', '=', 'data_users.no_peserta')
            ->select('users.*', 'data_users.*')
            ->where('users.is_admin', 0)
            ->get();
    }

    public function render()
    {
        return view('livewire.dashboard-admin',[
            'title' => 'Dashboard Admin'
        ]);
    }
}
