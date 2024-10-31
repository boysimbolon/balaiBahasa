<?php

namespace App\Livewire\Forms;

use App\Mail\VerifyEmail;
use App\Models\Data_User;
use App\Models\Moodle;
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
    public $city ='';
    protected $rules = [
        'nama' => ['required', 'string', 'max:100'],
        'nik' => ['required', 'digits:16', 'unique:data_users,nik'],
        'tmpt_lahir' => ['required', 'string', 'max:100'],
        'tgl_lahir' => ['required', 'date'],
        'pekerjaan' => ['required', 'string'],
        'NIDN' => ['nullable', 'string'],
        'city'=>['required','string'],
        'alamat' => ['required', 'string'],
        'jenis_kelamin' => ['required', 'in:Perempuan,Laki-Laki'],
        'instansi' => ['required', 'string'],
        'num_telp' => ['required', 'numeric'],
        'email' => ['required', 'email', 'max:255', 'unique:users,email'],
        'Pendidikan' => ['required', 'string'],
        'thn_lulus' => ['required', 'string'],
        'kewarganegaraan' => ['required', 'string'],
        'bhs_seharian' => ['required', 'string'],
        'pasFoto' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        'ktp' => ['required', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
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
        $tahun = date('y');
        $fix = '99';
        $base = $tahun . $fix;
        $autoInc = str_pad(User::where('no_Peserta', 'like', $base . '%')->count() + 1, 3, '0', STR_PAD_LEFT);
        $this->no_Peserta = $base . $autoInc;
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
            'is_admin'=>'1'
        ]);
        // Kirim email verifikasi
        Mail::to($user->email)->send(new VerifyEmail($this->no_Peserta, $this->password, $this->token));

        // Simpan data user tambahan ke tabel data_users
        Data_User::create($validated);

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
