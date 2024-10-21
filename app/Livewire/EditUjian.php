<?php

namespace App\Livewire;

use App\Models\environtment;
use App\Models\list_ruangan;
use App\Models\list_ujian;
use App\Models\tipe_ujian;
use Livewire\Component;

class EditUjian extends Component
{
    public $ujianId, $ujian, $id_jenis_ujian, $id_ruangan, $tanggal, $jam, $no_modul, $data_jenis_ujian, $data_ruangan_ujian, $list_jenis_ujian, $list_ruangan_ujian;
    public $modul;

    public function mount()
    {
        $this->ujianId = session()->get('edit-ujian');
        $this->list_jenis_ujian = tipe_ujian::all();
        $this->list_ruangan_ujian = list_ruangan::all();

        $ujian = list_ujian::join('environtment_ujian', 'list_ujian.id', '=', 'environtment_ujian.id_ujian')
            ->select('list_ujian.*', 'environtment_ujian.no_modul')
            ->where('list_ujian.id', $this->ujianId)
            ->first();
        if ($ujian) {
            $this->id_jenis_ujian = $ujian->id_jenis_ujian;
            $this->id_ruangan = $ujian->id_ruangan;
            $this->tanggal = $ujian->tanggal;
            $this->jam = date('H:i:s', strtotime($ujian->jam));
            $this->no_modul = $ujian->no_modul;
        }

//        $this->data_jenis_ujian = tipe_ujian::find($this->id_jenis_ujian);
//        $this->data_ruangan_ujian = list_ruangan::find($this->id_ruangan);
    }

    public function update()
    {
        $this->validate([
            'id_jenis_ujian' => ['required', 'exists:tipe_ujian,id'],
            'id_ruangan' => ['required', 'exists:list_ruangan,id'],
            'tanggal' => ['required', 'date'],
            'jam' => ['required', 'date_format:H:i'],
            'no_modul' => ['required', 'numeric'],
        ]);

        $ujian = list_ujian::find($this->ujianId);
        if ($ujian) {
            $ujian->update([
                'id_jenis_ujian' => $this->id_jenis_ujian,
                'id_ruangan' => $this->id_ruangan,
                'tanggal' => $this->tanggal,
                'jam' => $this->jam,
            ]);

            $modul = $ujian->environtmentUjian;
            if ($modul) {
                $modul->update([
                    'no_modul' => $this->no_modul,
                ]);
            }

            session()->flash('message', 'Jadwal ujian berhasil diupdate.');
            return $this->redirect(route('ListUjian'));
        } else {
            session()->flash('error', 'Jadwal ujian tidak ditemukan.');
        }

        return $this->redirect(route('ListUjian'));
    }

    public function render()
    {
        return view('livewire.edit-ujian', [
           'title' => 'Edit Ujian',
        ]);
    }
}
