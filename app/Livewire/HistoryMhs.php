<?php

namespace App\Livewire;

use Livewire\Component;

class HistoryMhs extends Component
{
    public function render()
    {
        return view('livewire.history-mhs', [
            'title' => 'History'
        ]);
    }
}
