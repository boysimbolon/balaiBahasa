<?php

namespace App\Livewire\Forms;

use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    public $nama = '';
    public $nik = '';
    public $tmpt_lahir = '';
    public $tgl_lahir = '';
    public $pekerjaan = '';
    public $NIDN = '';
    public $alamat = '';
    public $jenis_kelamin = '';
    public $instansi = '';
    public $num_telp = '';
    public $email = '';
    public $Pendidikan = '';
    public $thn_lulus = '';
    public $kewarganegaraan = '';
    public $bhs_seharian = '';
    public $pasFoto;
    public $ktp;
    public $no_Peserta = '';
    public $password='';
    protected $rules = [
        'nama' => ['required', 'string', 'max:100'],
        'nik' => ['required', 'digits:16', 'unique:' . data_user::class],
        'tmpt_lahir' => ['required', 'string', 'max:100'],
        'tgl_lahir' => ['required', 'date'],
        'pekerjaan' => ['required', 'string'],
        'NIDN' => ['nullable', 'string'],
        'alamat' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'in:Perempuan,Laki-Laki'],
        'instansi' => ['required', 'string'],
        'num_telp' => ['required', 'string'],
        'email' => ['required', 'email', 'max:255', 'unique:' . data_user::class],
        'Pendidikan' => ['required', 'string'],
        'thn_lulus' => ['required', 'string'],
        'kewarganegaraan' => ['required', 'string'],
        'bhs_seharian' => ['required', 'string'],
        'pasFoto' => ['required','image'],
        'ktp' => ['required','image'],
    ];

    public function render()
    {
        return view('livewire.forms.register');
    }

    public function save()
    {
        $validated = $this->validate();

        // Men-generate username dan password
        do {
            $username = substr(str_shuffle('0123456789'), 0, 8); // Panjang username diubah ke 8 digit
        } while (data_user::where('no_Peserta', $username)->exists());

        $password = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
        $validated['no_Peserta'] = $username;
        $validated['password'] = Hash::make($password);
//
//        // Simpan file
        $pasFotoPath = $this->pasFoto->store('pasFoto', 'public');
        $ktpPath = $this->ktp->store('ktp', 'public');

        // Tambahkan path file ke dalam array data yang tervalidasi
        $validated['pasFoto'] =$pasFotoPath;
        $validated['ktp'] =$ktpPath ;


        // Simpan data ke tabel User
        User::create([
            'no_Peserta' => $validated['no_Peserta'],
            'pin' => $validated['password'], // Menyimpan password yang sudah di-hash
        ]);
        // Simpan data ke tabel data_user
        data_user::create($validated);
        $this->reset();
        // Flash message lebih deskriptif
        session()->flash('message', 'Registrasi berhasil. File berhasil diunggah.');
    }
}
