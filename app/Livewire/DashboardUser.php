<?php

namespace App\Livewire;

use App\Models\data_user;
use App\Models\pesan_ujian;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class DashboardUser extends Component
{
    public $data, $auth, $foto, $ujian, $hariSisa = [];

    public function mount()
    {
        // Validasi akses mahasiswa
        if (!auth('user')->check()) {
            Session::flush();
            return redirect()->route('login')->with('message', 'Akses hanya untuk mahasiswa.');
        }

        // Jika mahasiswa, ambil data atribut dan ujian
        $this->data = auth('user')->user();

        // Ambil data tambahan dari model data_user
        $userData = data_user::find($this->data->id);
        if ($userData) {
            // Gabungkan data user dengan data yang ada
            $this->data->additional_data = $userData; // Misalnya, jika ingin menambahkan data ke objek yang sudah ada
            // Atau jika ingin menyimpan data ke array baru
//             $this->data = array_merge((array)$this->data, (array)$userData);
        }

        $this->ambilDataUjian();
    }


    // Fungsi untuk mengambil data ujian dan menghitung sisa hari
    private function ambilDataUjian()
    {
        $this->ujian = pesan_ujian::with('listujian.listruangan','listujian.tipeUjian','listujian.environtmentUjian')
            ->where('id_user', $this->data->id)
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
        $additionalData = $this->data->additional_data;

        // Render view dashboard mahasiswa
        return view('livewire.dashboard-mhs', [
            'title' => 'Dashboard',
            'hariSisa' => $this->hariSisa,
            'additionalData' => $additionalData,
        ]);
    }
}
