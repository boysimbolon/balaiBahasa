<?php

namespace App\Livewire\Forms;

use App\Mail\VerifyEmail;
use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
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
    public $password = '';
    public $token ='';

    protected $rules = [
        'nama' => ['required', 'string', 'max:100'],
        'nik' => ['required', 'digits:16', 'unique:data_users,nik'],
        'tmpt_lahir' => ['required', 'string', 'max:100'],
        'tgl_lahir' => ['required', 'date'],
        'pekerjaan' => ['required', 'string'],
        'NIDN' => ['nullable', 'string'],
        'alamat' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'in:Perempuan,Laki-Laki'],
        'instansi' => ['required', 'string'],
        'num_telp' => ['required', 'string'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'Pendidikan' => ['required', 'string'],
        'thn_lulus' => ['required', 'string'],
        'kewarganegaraan' => ['required', 'string'],
        'bhs_seharian' => ['required', 'string'],
        'pasFoto' => ['required', 'image'],
        'ktp' => ['required', 'image'],
    ];

    public function render()
    {
        return view('livewire.forms.register', [
            'title' => 'Register'
        ]);
    }

    public function save()
    {
        $validated = $this->validate();

        // Generate no_Peserta dan password
        do {
            $this->no_Peserta = substr(str_shuffle('0123456789'), 0, 8); // Panjang 8 digit
        } while (User::where('no_Peserta', $this->no_Peserta)->exists());

        $this->password = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);

        // Simpan file pasFoto dan KTP
        $pasFotoPath = $this->pasFoto->store('pasFoto', 'public');
        $ktpPath = $this->ktp->store('ktp', 'public');
        $this->token = Str::random(32);

        // Tambahkan path file ke data yang tervalidasi
        $validated['no_Peserta'] = $this->no_Peserta;
        $validated['token'] = $this->token;
        $validated['password'] = Hash::make($this->password);
        $validated['pasFoto'] = $pasFotoPath;
        $validated['ktp'] = $ktpPath;

        // Simpan data ke tabel User
        $user = User::create([
            'no_Peserta' => $validated['no_Peserta'],
            'email' => $validated['email'],
            'email_verification_token'=>$validated['token'],
            'pin' => $validated['password'], // Simpan password yang sudah di-hash,
            'is_admin'=>'0'
        ]);

        // Generate token untuk verifikasi email

        // Kirim email verifikasi
        Mail::to($user->email)->send(new VerifyEmail($this->no_Peserta, $this->password, $this->token));

        // Simpan data user tambahan ke tabel data_users
        data_user::create($validated);

        // Reset semua field form
        $this->reset([
            'nama', 'nik', 'tmpt_lahir', 'tgl_lahir', 'pekerjaan', 'NIDN', 'alamat', 'jenis_kelamin', 'instansi',
            'num_telp', 'email', 'Pendidikan', 'thn_lulus', 'kewarganegaraan', 'bhs_seharian', 'pasFoto', 'ktp'
        ]);

        // Berikan feedback sukses
        session()->flash('message', 'Registrasi berhasil. Silakan cek email untuk verifikasi.');

        // Redirect ke halaman login setelah registrasi
        return redirect()->to('login');
    }
}
