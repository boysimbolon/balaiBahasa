<?php

namespace App\Livewire;

use App\Models\tipe_ujian;
use Livewire\Component;

class CreateTipeUjian extends Component
{
    public $jenis_ujian;
    public function render()
    {
        return view('livewire.create-tipe-ujian');
    }
    public function save(){
        $this->validate([
            'jenis_ujian' => 'required'
        ]);
        $tipe = new tipe_ujian();
        $tipe->jenis_ujian = $this->jenis_ujian;
        $tipe->save();
        session()->flash('success', 'Tipe Ujian berhasil ditambahkan.');
        return redirect()->route('dashboard-admin');
    }
}
