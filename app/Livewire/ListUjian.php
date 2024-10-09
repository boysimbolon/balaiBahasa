<?php

namespace App\Livewire;

use App\Models\list_ujian;
use Livewire\Component;

class ListUjian extends Component
{
    public $ujians;

    public function mount(){
        $this->ujians = list_ujian::with('tipeUjian', 'listruangan')->get();
    }

    public function render()
    {
        return view('livewire.list-ujian', [
            'title'=>'List Ujian'
        ]);
    }
}
