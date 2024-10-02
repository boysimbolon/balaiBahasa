<?php

namespace App\Livewire;

use App\Models\Environtment;
use App\Models\list_ujian;
use Livewire\Component;

class CreateUjian extends Component
{
    public $id_jenis_ujian, $id_ruangan, $tanggal, $jam, $status;
    public $JenisUjian, $ruangan, $no_modul, $enroll_key;

    public function mount()
    {
        $this->resetForm();
        $this->JenisUjian = \App\Models\tipe_ujian::all();
        $this->ruangan = \App\Models\list_ruangan::all();
    }

    public function render()
    {
        return view('livewire.create-ujian',[
            'title' => 'Tambah Jadwal Ujian'
        ]);
    }
    protected $rules=[
            'id_jenis_ujian' => ['required', 'exists:tipe_ujian,id'],
            'id_ruangan' => ['required', 'exists:list_ruangan,id'],
            'tanggal' => ['required', 'date'],
            'jam' => ['required', 'date_format:H:i'],
            'no_modul' => ['required', 'numeric'],
            'enroll_key' => ['required', 'string']
    ];

    public function Save()
    {
        $this->validate();
        // Cek apakah jadwal ujian sudah ada
        $checkKelas = list_ujian::where('id_jenis_ujian', $this->id_jenis_ujian)
            ->where('id_ruangan', $this->id_ruangan)
            ->where('tanggal', $this->tanggal)
            ->where('jam', $this->jam)
            ->first();

        if ($checkKelas) {
            session()->flash('error', 'Jadwal Ujian sudah ada.');
            return back(); // Kembali ke halaman yang sama jika terjadi error
        }

        // Simpan data ujian
        $ujian = list_ujian::create([
            'id_jenis_ujian' => $this->id_jenis_ujian,
            'id_ruangan' => $this->id_ruangan,
            'tanggal' => $this->tanggal,
            'jam' => $this->jam,
            'status' => 1,
        ]);

        // Simpan data environtment
        Environtment::create([
            'id_ujian' => $ujian->id,
            'no_modul' => $this->no_modul,
            'enroll_key' => $this->enroll_key,
        ]);

        // Tampilkan pesan sukses
        session()->flash('success', 'Jadwal Ujian berhasil ditambahkan.');
        $this->resetForm();
        return redirect()->route('dashboard-admin');
    }

    // Fungsi untuk mereset form
    private function resetForm()
    {
        $this->id_jenis_ujian = '';
        $this->id_ruangan = '';
        $this->tanggal = '';
        $this->jam = '';
        $this->status = '';
        $this->no_modul = '';
        $this->enroll_key = '';
    }
}
