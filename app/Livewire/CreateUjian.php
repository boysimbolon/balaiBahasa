<?php

namespace App\Livewire;

use App\Models\list_ujian;
use Livewire\Component;

class CreateUjian extends Component
{
    public $id_jenis_ujian, $id_ruangan, $tanggal, $jam, $status;
    public $JenisUjian, $ruangan;
    public function mount(){
        $this->id_jenis_ujian = '';
        $this->id_ruangan = '';
        $this->tanggal = '';
        $this->jam = '';
        $this->status = '';
        $this->JenisUjian = \App\Models\tipe_ujian::all();
        $this->ruangan = \App\Models\list_ruangan::all();
    }
    public function render()
    {
        return view('livewire.create-ujian');
    }
    public function save()
    {
        $this->validate([
            'id_jenis_ujian' => ['required','exists:tipe_ujian,id'],
            'id_ruangan' => ['required','exists:list_ruangan,id'],
            'tanggal' => 'required',
            'jam' => 'required',
            'status' => 'required'
        ]);
        $checkKelas = list_ujian::where('id_jenis_ujian',$this->id_jenis_ujian)->where('id_ruangan',$this->id_ruangan)->where('tanggal',$this->tanggal)->where('jam',$this->jam)->first();
       if($checkKelas){
           session()->flash('error', 'Jadwal Ujian sudah ada.');
           return redirect()->route('CreateUjian');
       }
        $ujian = new list_ujian();
        $ujian->id_jenis_ujian = $this->id_jenis_ujian;
        $ujian->id_ruangan = $this->id_ruangan;
        $ujian->tanggal = $this->tanggal;
        $ujian->jam = $this->jam;
        $ujian->status = $this->status;
        $ujian->save();
        session()->flash('success', 'Jadwal Ujian berhasil ditambahkan.');
        return redirect()->route('dashboard-admin');
    }
}
