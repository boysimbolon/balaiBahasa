<?php

namespace App\Livewire;

use App\Models\list_ruangan;
use Livewire\Component;

class EditRuanganUjian extends Component
{
    public $ruanganId, $ruangan, $nama_ruangan, $alamat, $kapasitas;
    public function mount()
    {
        $this->ruanganId = session()->get('edit-ruang-ujian');

        $ruangan = list_ruangan::find($this->ruanganId);
        if ($ruangan) {
            $this->nama_ruangan = $ruangan->nama_ruangan;
            $this->alamat = $ruangan->alamat;
            $this->kapasitas = $ruangan->kapasitas;
        }
    }

    public function update()
    {
        $this->validate([
            'nama_ruangan' => 'required',
            'alamat' => 'required',
            'kapasitas' => 'required|integer|min:1',
        ]);

        $ruangan = list_ruangan::find($this->ruanganId);
        if ($ruangan) {
            $ruangan->update([
               'nama_ruangan' => $this->nama_ruangan,
               'alamat' => $this->alamat,
               'kapasitas' => $this->kapasitas,
            ]);

            session()->flash('message', 'Ruangan berhasil diupdate.');
            return $this->redirect(route('ListRuangan'));
        } else {
            session()->flash('error', 'Ruangan tidak ditemukan.');
        }

        return $this->redirect(route('ListRuangan'));
    }

    public function render()
    {
        return view('livewire.edit-ruang-ujian', [
            'title'=>'Edit Ruangan Ujian',
        ]);
    }
}
