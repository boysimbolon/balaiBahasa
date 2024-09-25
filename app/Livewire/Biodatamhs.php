<?php

namespace App\Livewire;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Biodatamhs extends Component
{
    public $data, $foto, $alamat;

    public function mount()
    {
        // Mengambil data dari session
        $data = session('atribut');

        // Pastikan session berisi data
        if ($data) {
            // Mengambil data foto dari database
            $fotos = DB::connection('sqlsrv')
                ->table('tb_foto_mhs')
                ->where('nim', trim($data->nim))
                ->first();

            // Mengambil data alamat dari database
            $alamat = DB::connection('sqlsrv')
                ->table('tbl_alamat')
                ->where('nim', trim($data->nim))
                ->first();

            // Set properti alamat jika ada data
            if ($alamat) {
                $this->alamat = $alamat->alamat_rumah;
            }

            // Set properti data mahasiswa
            $this->data = [
                "nim" => $data->nim,
                "nama" => $data->nama,
                "temp_lahir" => $data->temp_lahir,
                "tgl_lahir" => Carbon::parse($data->tgl_lahir)->translatedFormat('d F Y'),
                "sex" => $data->sex,
                "notelp" => $data->notelp,
                "email" => $data->email
            ];

            // Set properti foto jika ada data foto
            if ($fotos) {
                $foto = trim($fotos->foto_url);
                $foto = str_replace('../../photo/mhs/', '', $foto);
                $this->foto = 'image.php?file=mhs/thumbnails/thumbnail.' . $foto;
            } else {
                // Jika tidak ada foto, berikan gambar default
                $this->foto = 'path/to/default/photo.jpg';
            }
        }
    }

    public function render()
    {
        return view('livewire.biodata-mhs', [
            'data' => $this->data,
            'foto' => $this->foto,
            'alamat' => $this->alamat
        ]);
    }
}
