<?php

namespace App\Livewire;

use Livewire\Component;

class Changepassword extends Component
{
    public function render()
    {
        return view('livewire.changepassword', [
            'title' => 'Ganti Password'
        ]);
    }
}
