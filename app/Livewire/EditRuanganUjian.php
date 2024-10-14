<?php

namespace App\Livewire;

use App\Models\list_ruangan;
use Livewire\Component;

class EditRuanganUjian extends Component
{
    public function render()
    {
        return view('livewire.edit-ruang-ujian', [
            'title'=>'Edit Ruangan Ujian',
        ]);
    }
}
