<?php

namespace App\Livewire;

use App\Models\list_ruangan;
use Livewire\Component;

class RuanganUjian extends Component
{
    public $ruangan_ujians;
    protected $listeners = ['editRuangan'];
//    protected $listeners = ['deleteRuangan'];

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

    public function deleteRuangan($id)
    {
        // Logika untuk menghapus ruangan
        list_ruangan::destroy($id);
        // Tambahkan pesan sukses jika perlu
        session()->flash('message', 'Ruangan berhasil dihapus.');
        return redirect()->route('ListRuangan');
    }

    public function editRuangan($id)
    {
        session()->put('edit-ruang-ujian', $id);

        return $this->redirect(route('edit-ruang-ujian'));
    }
}
