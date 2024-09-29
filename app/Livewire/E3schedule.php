<?php

namespace App\Livewire;

use App\Models\list_ujian;
use App\Models\pesan_ujian;
use Livewire\Component;

class E3schedule extends Component
{
    public $jenis, $tanggal, $jam, $ruangan, $kapasitas, $kuota;
    public $pesan, $tgl, $jm, $created;

    public function mount()
    {
        // Cek tipe user
        if (auth('user')->check()) {
            $userId = auth('user')->user()->id;
            $this->pesan = pesan_ujian::with('listujian.listruangan', 'listujian.tipeUjian')
                ->where('id_user', $userId)
                ->get();
        } elseif (session('guard') == 'mhs') {
            $nim = trim(session('atribut')->nim);
            $this->pesan = pesan_ujian::with('listujian.listruangan', 'listujian.tipeUjian')
                ->where('nim', $nim)
                ->get();
        }

        // Formatting Tanggal, Jam, dan Waktu Dibuat
        $this->formatTanggalJamPesan();

        // Mendapatkan data tipe ujian, tanggal, dan jam ujian
        // Mendapatkan data tipe ujian, tanggal, dan jam ujian
        $this->jenis = list_ujian::with('tipeUjian')->get();

        $this->tanggal = list_ujian::pluck('tanggal')
            ->map(fn($item) => \Carbon\Carbon::parse($item)->translatedFormat('l, d F Y'));
        $this->jam = list_ujian::pluck('jam')
            ->map(fn($item) => \Carbon\Carbon::parse($item)->translatedFormat('H:i'));

        // Mengambil data kapasitas dan kuota
        $Method = new Toeflschedule();
        $Method->loadRuanganAndKapasitas();
        $this->kapasitas = $Method->kapasitas;
        $this->kuota = $Method->kuota;
    }

    // Fungsi untuk format tanggal dan jam pesan
    private function formatTanggalJamPesan()
    {
        $this->tgl = $this->pesan->map(function ($item) {
            return \Carbon\Carbon::parse($item->listujian->tanggal)->translatedFormat('l, d F Y');
        });

        $this->jm = $this->pesan->map(function ($item) {
            return \Carbon\Carbon::parse($item->listujian->jam)->translatedFormat('H:i');
        });

        $this->created = $this->pesan->map(function ($item) {
            return \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y');
        });
    }

    // Fungsi untuk memuat data ruangan, kapasitas, dan kuota

    public function render()
    {
        $view = auth('user')->check() ? 'livewire.e3schedule' : 'livewire.e3-schedule-mhs';

        return view($view, [
            'title' => 'Jadwal 3E'
        ]);
    }

    public function Pesan($id,$kapasitas)
    {

        // Mengecek jumlah peserta saat ini untuk ujian tertentu
        $jumlahPeserta = pesan_ujian::where('id_ujian', '=', $id["id"])->where('status',1)->count();

        if ($jumlahPeserta <= $kapasitas) {
            pesan_ujian::create([
                'id_ujian' =>  $id["id"],
                'id_user' => auth('user')->user()->id ?? null,
                'nim' => trim(session('atribut')->nim) ?? null, // jika user memiliki nim
                'id_ruangan'=> $id["id_ruangan"],
                'status' => 0 // Ubah status menjadi aktif setelah pemesanan
            ]);
            session()->flash('message', 'Pesan Ujian Berhasil');
            $this->mount();
        } else {
            session()->flash('message', 'Kuota Ujian Penuh');
        }
    }
}
