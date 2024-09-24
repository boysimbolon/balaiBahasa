<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditBiodataUser extends Component
{
    public $users,$email;

    public function mount()
    {
        // Pastikan Auth user tersedia dan memiliki no_Peserta
        $authUser = Auth::guard('user')->user();
        if ($authUser && $authUser->no_Peserta) {
            $this->users = data_user::where('no_Peserta', $authUser->no_Peserta)->first();
            $this->email = user::where('no_Peserta',$authUser->no_Peserta)->select('email')->first();
        } else {
            // Handle jika tidak ada user atau no_Peserta
            $this->users = null;
        }
    }

    public function render()
    {
        return view('livewire.editprofile', ['users' => $this->users,'email'=>$this->email]);
    }
}
