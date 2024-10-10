<?php

namespace App\Livewire;

use App\Models\list_ruangan;
use App\Models\ListRuangan;
use Livewire\Component;

class CreateRuangan extends Component
{
    public $nama_ruangan, $kapasitas, $alamat;

    public function render()
    {
        return view('livewire.create-ruangan',
        [
            'title' => 'Tambah Ruangan'
        ]);
    }

    public function save()
    {
        $this->validate([
            'nama_ruangan' => 'required',
            'kapasitas' => 'required|integer', // Anda bisa menambahkan validasi 'integer' untuk kapasitas jika memang diharapkan
            'alamat' => 'required',
        ]);

        $ruangan = new list_ruangan();
        $ruangan->nama_ruangan = $this->nama_ruangan;
        $ruangan->kapasitas = $this->kapasitas;
        $ruangan->alamat = $this->alamat;
        $ruangan->save();

        session()->flash('success', 'Ruangan berhasil ditambahkan.');

        return redirect()->route('ListRuangan'); // Menggunakan route jika ada
    }
}
