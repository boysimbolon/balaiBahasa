<?php

namespace App\Livewire;


use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Changepassword extends Component
{
    public $users, $old_password, $new_password, $confirm_new_password;

//    protected $rules = [
//        'old_password' => 'required' . $this->users->id,
//        'new_password' => 'required|confirmed|min:5',
//        'confirm_new_password' => 'required',
//    ];

//    public function mount()
//    {
//        $authUser = Auth::guard('user')->user();
//
//        if ($authUser && $authUser->no_Peserta) {
//            $this->users = User::where('no_Peserta', $authUser->no_Peserta)->first();
//        }
//    }

    public function updatePassword()
    {
//        $user = Auth::user();
//
//        $this->validate([
//            'old_password' => 'required',
//            'new_password' => 'required|confirmed|min:5',
//            'confirm_new_password' => 'required',
//        ]);
//
//        $user = User::findOrFail($this->users->id);
//
//        $updates = [];
//
//        dd($updates);
//
//        if ($this->confirm_new_password !== $user->pin) {
//            $user->upadate(['pin' => Hash::make($this->confirm_new_password)]);
//        }
//
//        if (!empty($updates)) {
//            $user->update($updates);
//            return redirect()->route('change-password-user')->with('success', 'Password pengguna berhasi diperbaharui!');
//        } else {
//            return redirect()->route('change-password-user')->with('info', 'No changes detected to update!');
//        }

//        if (!Hash::check($this->old_password, $user->pin)) {
//            session()->flash('error', 'Password lama tidak sesuai');
//            return redirect()->back();
//        }

//        $user->pin = bcrypt($this->new_password);
//        $user->save();

//        session()->flash('success', 'Password berhasil diubah');
//        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.changepassword', [
            'title' => 'Ganti Password'
        ]);
    }
}
