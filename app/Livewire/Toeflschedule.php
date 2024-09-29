<?php

namespace App\Livewire;

use App\Models\list_ujian;
use App\Models\pesan_ujian;
use App\Models\tipe_ujian;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Toeflschedule extends Component
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
        $this->loadRuanganAndKapasitas();
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
    public function loadRuanganAndKapasitas()
    {
        // Mengambil data ujian dengan relasi ruangan
        $this->ruangan = list_ujian::with('listruangan')->get();

        // Menghitung kuota per ujian
        $this->kapasitas = [];
        $this->kuota = [];
        foreach ($this->ruangan as $ujian) {
            // Pastikan relasi 'ruangan' benar
            $kapasitasRuangan = $ujian->listruangan->kapasitas;

            // Hitung jumlah peserta yang sudah mendaftar dengan status 1
            $jumlahPeserta = pesan_ujian::where('id_ujian','=', $ujian->id)
                ->where('status', 1) // Peserta dengan status konfirmasi
                ->count();
            // Hitung kuota tersisa
            $this->kapasitas[] = $kapasitasRuangan;
            $this->kuota[] = $kapasitasRuangan - $jumlahPeserta;
        }
    }

    public function render()
    {
        $view = auth('user')->check() ? 'livewire.toeflschedule' : 'livewire.toefl-schedule-mhs';

        return view($view, [
            'title' => 'Jadwal TOEFL'
        ]);
    }

    public function Pesan($id,$kapasitas)
    {

        // Mengecek jumlah peserta saat ini untuk ujian tertentu
        $jumlahPeserta = pesan_ujian::where('id_ujian', '=', $id["id"])->count();

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
