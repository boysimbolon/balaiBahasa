<?php

namespace App\Livewire;

use App\Http\Controllers\ApiController;
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

        // Format Tanggal, Jam, dan Waktu Dibuat
        $this->formatTanggalJamPesan();

        // Mendapatkan data tipe ujian, tanggal, dan jam ujian
        $this->jenis = list_ujian::with('tipeUjian', 'listruangan')->get();

        $this->tanggal = list_ujian::pluck('tanggal')
            ->map(fn($item) => \Carbon\Carbon::parse($item)->translatedFormat('l, d F Y'));
        $this->jam = list_ujian::pluck('jam')
            ->map(fn($item) => \Carbon\Carbon::parse($item)->translatedFormat('H:i'));

        // Mengambil data kapasitas dan kuota dari metode Toeflschedule
        $method = new Toeflschedule();
        $method->loadRuanganAndKapasitas();
        $this->ruangan = list_ujian::with('listruangan')->get();
        $this->kapasitas = $method->kapasitas;
        $this->kuota = $method->kuota;
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

    // Render view berdasarkan tipe pengguna
    public function render()
    {
        $view = 'livewire.e3-schedule-mhs';

        return view($view, [
            'title' => 'Jadwal 3E'
        ]);
    }

    // Fungsi untuk melakukan pemesanan ujian
    public function Pesan($id, $kapasitas)
    {
        // Mengecek jumlah peserta saat ini untuk ujian tertentu
        $jumlahPeserta = pesan_ujian::where('id_ujian', '=', $id["id"])->where('status', 1)->count();
        if ($jumlahPeserta < $kapasitas) {
            if(auth('user')->check())
                {
//                    pesan_ujian::create([
//                    'id_ujian' => $id["id"],
//                    'id_user' => auth('user')->user()->id ,
//                    'nim' => null, // jika user memiliki nim
//                    'id_ruangan' => $id["id_ruangan"],
//                    'status' => 0 // Status awal saat pesan dibuat
//                ]);
//                    $data=collect($id)->map(function($item){
//                        return [
//                            (array) $item,
//                            auth('user')->user()
//                        ];
//                    });
                    $api = new ApiController();
                    $api->create($id["id_jenis_ujian"],'user');
                }
            elseif(session('guard') == 'mhs'){
//                pesan_ujian::create([
//                    'id_ujian' => $id["id"],
//                    'id_user' => null ,
//                    'nim' => trim(session('atribut')->nim) ?? null, // jika user memiliki nim
//                    'id_ruangan' => $id["id_ruangan"],
//                    'status' => 0 // Status awal saat pesan dibuat
//                ]);
//                $data=collect($id)->map(function($item){
//                    return [
//                        (array) $item,
//                        session('atribut')
//                    ];
//                });
                $api = new ApiController();
                $api->create($id["id_jenis_ujian"],'mhs');
            }
            session()->flash('message', 'Pesan Ujian Berhasil');
            if(auth('user')->check()){
                return redirect()->route('e3-schedule-user');
            }
            elseif (session('guard') == 'mhs'){
            return redirect()->route('e3-schedule-mhs');
            }
        } else {
            session()->flash('message', 'Kuota Ujian Penuh');
        }
    }
}
