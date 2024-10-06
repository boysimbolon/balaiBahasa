<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\pesan_ujian;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardMhs extends Component
{
    public $data, $auth, $foto, $ujian, $hariSisa = [];

    public function mount()
    {
        // Validasi akses mahasiswa
        if (session('guard') !== 'mhs') {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk mahasiswa.');
        }

        // Jika mahasiswa, ambil data atribut dan ujian
        $this->data = session('atribut');
        $this->ambilFotoMahasiswa();
        $this->ambilDataUjian();
        $this->auth = 'mhs';
    }

    // Fungsi untuk mengambil foto mahasiswa
    private function ambilFotoMahasiswa()
    {
        $fotos = DB::connection('sqlsrv')
            ->table('tb_foto_mhs')
            ->where('nim', trim($this->data->nim))
            ->first();

        if ($fotos) {
            $foto = trim($fotos->foto_url);
            $foto = str_replace('../../photo/mhs/', '', $foto);
            $this->foto = 'image.php?file=mhs/thumbnails/thumbnail.' . $foto;
        } else {
            $this->foto = 'default_photo.jpg'; // Foto default jika tidak ada
        }
    }
    // Fungsi untuk mengambil data ujian dan menghitung sisa hari
    private function ambilDataUjian()
    {
        $this->ujian = pesan_ujian::with('listujian.listruangan','listujian.tipeUjian','listujian.environtmentUjian')
            ->where('nim', trim($this->data->nim))
            ->where('status', 1)
            ->get();
        foreach ($this->ujian as $ujian) {
            if (!empty($ujian->listujian->tanggal)) {
                $tanggalUjian = Carbon::parse($ujian->listujian->tanggal);

                // Hitung sisa hari dengan membagi diffInHours dengan 24
                $this->hariSisa[] = floor($tanggalUjian->diffInHours(Carbon::now()) / 24);
            } else {
                // Tangani jika tidak ada tanggal ujian yang valid
                $this->hariSisa[] = null; // Simpan null jika tidak ada data
            }
        }
    }

    public function render()
    {
        // Render view dashboard mahasiswa
        return view('livewire.dashboard-mhs', [
            'title' => 'Dashboard Mahasiswa',
            'hariSisa' => $this->hariSisa,
        ]);
    }
}
