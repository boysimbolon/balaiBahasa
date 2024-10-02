<?php

namespace App\Livewire;

use Livewire\Component;

class RuanganUjian extends Component
{
    public $ruangan_ujians;
    public function mount(){
        $this->ruangan_ujians = \App\Models\ruangan_ujian::all();
    }
    public function render()
    {
        return view('livewire.ruangan-ujian');
    }
}
