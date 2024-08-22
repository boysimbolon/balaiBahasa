<?php

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Livewire\Attributes\Layout;
use Livewire\Volt\Component;

new #[Layout('layouts.guest')] class extends Component
{
    public string $nama = '';
    public string $nik = '';
    public string $tmpt_lahir = '';
    public string $tgl_lahir = '';
    public string $perkerjaan ='';
    public string $NIDN ='';
    public string $alamat ='';
    public string $jenis_kelamin = '';
    public string $instansi ='';
    public string $num_telp = '';
    public string $email = '';
    public string $Pendidikan ='';
    public string $thn_lulus ='';
    public string $kewarganegaraan = '';
    public string $bhs_seharian = '';
    public string $pasFoto ='';
    public string $ktp = '';

    /**
     * Handle an incoming registration request.
     */
    public function register(): void
    {
        $validated = $this->validate([
            'nama' => ['required', 'string', 'max:100'],
            'nik' => ['required', 'integer', 'unique:'.\App\Models\data_user::class],
            'tmpt_lahir' => ['required', 'string', 'max:100'],
            'tgl_lahir' => ['required', 'date'],
            'pekerjaan' => ['required', 'string'],
            'NIDN' => ['sometimes', 'nullable', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'in:Perempuan,Laki-Laki'],
            'instansi' => ['required', 'string'],
            'num_telp' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.\App\Models\data_user::class],
            'Pendidikan' => ['required', 'string'],
            'thn_lulus' => ['required', 'integer'],
            'kewarganegaraan' => ['required', 'string'],
            'pasFoto' => ['required', 'image'],
            'ktp' => ['required', 'image'],
            'no_Peserta' => ['required', 'string', 'unique:'.\App\Models\data_user::class]
        ]);

        // Generate unique username
        do {
            $username = substr(str_shuffle('0123456789'), 0, 7);
        } while (\App\Models\data_user::where('no_Peserta', $username)->exists());

        // Generate password
        $password = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
        $validated['no_Peserta'] = $username;
        $validated['password'] = Hash::make($password);

        event(new Registered($user = \App\Models\data_user::create($validated)));
        event(new Registered($user = \App\Models\User::create($validated)));
        Auth::login($user);

        $this->redirect(route('dashboard', [], false));
    }};

?>

<div>
    <form wire:submit="register">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input wire:model="nama" id="nama" class="block mt-1 w-full" type="text" name="nama" required autofocus autocomplete="nama" />
            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="nik" :value="__('NIK')" />
            <x-text-input wire:model="nik" id="nik" class="block mt-1 w-full" type="number" name="nik" required autofocus autocomplete="nik" />
            <x-input-error :messages="$errors->get('nik')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tmpt_lahir" :value="__('Tempat Lahir')" />
            <x-text-input wire:model="tmpt_lahir" id="tmpt_lahir" class="block mt-1 w-full" type="text" name="tmpt_lahir" required autofocus autocomplete="tmpt_lahir" />
            <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')" />
            <x-text-input wire:model="tgl_lahir" id="tgl_lahir" class="block mt-1 w-full" type="date" name="tgl_lahir" required autofocus autocomplete="tgl_lahir" />
            <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="Pekerjaan" :value="__('Perkerjaan')" />
            <x-text-input wire:model="Pekerjaan" id="Pekerjaan" class="block mt-1 w-full" type="text" name="Pekerjaan" required autofocus autocomplete="Pekerjaan" />
            <x-input-error :messages="$errors->get('Pekerjaan')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="NIDN" :value="__('NIDN')" />
            <x-text-input wire:model="NIDN" id="NIDN" class="block mt-1 w-full" type="text" name="NIDN" required autofocus autocomplete="DIDN" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="alamat" :value="__('Alamat')" />
            <x-text-input wire:model="alamat" id="alamat" class="block mt-1 w-full" type="text" name="alamat" required autofocus autocomplete="alamat" />
            <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
        </div>
        {{-- wrong it must use option --}}
        <div>
            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')" />
            <select wire:model="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full" required autofocus>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="instansi" :value="__('Instansi')" />
            <x-text-input wire:model="instansi" id="instansi" class="block mt-1 w-full" type="text" name="instansi" required autofocus autocomplete="instansi" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="num_telp" :value="__('Nomor Telepon')" />
            <x-text-input wire:model="num_telp" id="num_telp" class="block mt-1 w-full" type="number" name="num_telp" required autofocus autocomplete="num_telp" />
            <x-input-error :messages="$errors->get('num_telp')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        {{--  wrong it must use option      --}}
        <div>
            <x-input-label for="pendidikan" :value="__('Pendidikan')" />
            <select wire:model="pendidikan" id="pendidikan" name="pendidikan" class="block mt-1 w-full" required autofocus>
                <option value="">Pilih Pendidikan</option>
                <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                <option value="D-I/II">D-I/II</option>
                <option value="D-III">D-III</option>
                <option value="D-IV">D-IV</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
                <option value="S3">S3</option>
            </select>
            <x-input-error :messages="$errors->get('pendidikan')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="tahun_lulus" :value="__('Tahun Lulus')" />
            <select wire:model="tahun_lulus" id="tahun_lulus" name="tahun_lulus" class="block mt-1 w-full" required autofocus>
                <option value="">Pilih Tahun Lulus</option>
                @foreach (range(date('Y'), date('Y') - 50) as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('tahun_lulus')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')" />
            <x-text-input wire:model="kewarganegaraan" id="kewarganegaraan" class="block mt-1 w-full" type="text" name="kewarganegaraan" required autofocus autocomplete="kewarganegaraan" />
            <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="pasFoto" :value="__('Pas Foto')" />
            <x-text-input wire:model="pasFoto" id="pasFoto" class="block mt-1 w-full" type="file" name="pasFoto" required autofocus autocomplete="pasFoto" />
            <x-input-error :messages="$errors->get('pasFoto')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="ktp" :value="__('KTP')" />
            <x-text-input wire:model="ktp" id="ktp" class="block mt-1 w-full" type="file" name="ktp" required autofocus autocomplete="ktp" />
            <x-input-error :messages="$errors->get('ktp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none
            focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Sudah Memiliki Akun?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</div>
