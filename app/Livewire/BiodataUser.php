<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class BiodataUser extends Component
{
    public $users,$email;

    public function mount()
    {
        // Pastikan Auth user tersedia dan memiliki no_Peserta
        $authUser = Auth::guard('user')->user();
        $authAdmin = Auth::guard('admin')->user();
        if ($authUser && $authUser->no_Peserta) {
            $this->users = data_user::where('no_Peserta', $authUser->no_Peserta)->first();
            $this->email = user::where('no_Peserta',$authUser->no_Peserta)->select('email')->first();
        } elseif($authAdmin && $authAdmin->no_Peserta) {
            $this->users = data_user::where('no_Peserta', $authAdmin->no_Peserta)->first();
            $this->email = user::where('no_Peserta',$authAdmin->no_Peserta)->select('email')->first();
        }
    }

    public function render()
    {
        if(Auth::guard('user')->check()){
            return view('livewire.biodatausr', [
                'title' => 'Biodata User',
                'users' => $this->users,
                'email' => $this->email
            ]);
        }elseif (Auth::guard('admin')->check()) {
            return view('livewire.biodatausr', [
                'title' => 'Biodata Admin',
                'users' => $this->users,
                'email' => $this->email
            ]);
        }
    }
}
