<?php

namespace App\Livewire;

use Livewire\Component;

class TipeUjian extends Component
{
    public $tipe_ujians;
    public function mount(){
        $this->tipe_ujians = \App\Models\tipe_ujian::all();
    }
    public function render()
    {
        return view('livewire.tipe-ujian');
    }
}
