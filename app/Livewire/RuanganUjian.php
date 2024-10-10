<?php

namespace App\Livewire;

use App\Models\list_ruangan;
use Livewire\Component;

class RuanganUjian extends Component
{
    public $ruangan_ujians;

    public function mount(){
        $this->ruangan_ujians = list_ruangan::all();
    }

    public function render()
    {
        return view('livewire.ruangan-ujian', [
            'title'=>'Ruangan Ujian',
            'ruangan_ujians' => $this->ruangan_ujians,
        ]);
    }

//    public function confirmDelete($id)
//    {
//        $this->emit('deleteRuangan', $id);
//    }

    public function deleteRuangan($id) {
        list_ruangan::find($id)->delete();
        $this->ruangan_ujians = list_ruangan::all();
//        $this->emit('ruanganDeleted');

        return redirect()->route('ListRuangan');
    }
}
