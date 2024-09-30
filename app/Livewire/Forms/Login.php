<?php

namespace App\Livewire\Forms;

use App\Livewire\Actions\Logout;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Livewire\Component;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class Login extends Component
{
    public $no_Peserta = '';
    public $pin = '';
    public $remember = false;

    protected $rules = [
        'no_Peserta' => ['required', 'string', 'digits:7'],
        'pin' => ['required', 'string'],
    ];

    public function render()
    {
        return view('livewire.forms.login', [
            'title' => 'Login'
        ]);
    }

    public function Login()
    {
        // Validasi input
        $this->validate();

        // Pastikan login tidak dibatasi oleh rate limiter
        $this->ensureIsNotRateLimited();

        // Autentikasi pengguna atau mahasiswa
        if (!$this->authenticate()) {
            // Tambah hit pada rate limiter jika gagal
            RateLimiter::hit($this->throttleKey());

            // Lemparkan pesan kesalahan validasi
            throw ValidationException::withMessages([
                'no_Peserta' => trans('auth.failed'),
            ]);
        }

        // Bersihkan hit rate limiter jika sukses
        RateLimiter::clear($this->throttleKey());

        // Regenerasi session untuk mencegah fixation attacks
        session()->regenerate();
        // Redirect sesuai dengan guard yang aktif dan lempar data
        if (Auth::guard('mhs')->check()) {
            // Redirect ke dashboard mahasiswa dengan nim
            session([ 'atribut' => auth('mhs')->user(),'guard' => 'mhs',]);
            return redirect()->route('dashboard-mhs');
        } elseif (Auth::guard('user')->check()) {
            // Redirect ke dashboard user dengan no_Peserta
            return redirect()->route('dashboard-user');
        }elseif(Auth::guard('admin')->check()){
            // Redirect ke dashboard admin dengan no_Peserta
            return redirect()->route('dashboard-admin');
        }
    }

    protected function authenticate(): bool
    {
        return $this->authenticateUser() || $this->authenticateMahasiswa();
    }

    protected function authenticateUser(): bool
    {
        $user = User::where('no_Peserta', trim($this->no_Peserta))->first();
        if ($user && Hash::check($this->pin, $user->pin) && $user->email_verified_at !== null && $user->is_admin == '0') {
            Auth::guard('mhs')->logout();
            Auth::guard('admin')->logout();
            Auth::guard('user')->login($user, $this->remember);
            return true;
        } elseif ($user && Hash::check($this->pin, $user->pin) && $user->email_verified_at !== null && $user->is_admin == '1') {
            Auth::guard('mhs')->logout();
            Auth::guard('user')->logout();
            Auth::guard('admin')->login($user, $this->remember);
            return true;
        }
        return false;
    }

    protected function authenticateMahasiswa(): bool
    {
        $mahasiswa = Mahasiswa::where('nim', trim($this->no_Peserta))->first();

        if ($mahasiswa && ($this->pin === trim($mahasiswa->paswd))) {
            auth('user')->logout();
            auth('admin')->logout();
            auth('mhs')->login($mahasiswa);
            return true;
        }

        return false;
    }

    protected function ensureIsNotRateLimited(): void
    {
        if (RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            $seconds = RateLimiter::availableIn($this->throttleKey());

            throw ValidationException::withMessages([
                'no_Peserta' => trans('auth.throttle', [
                    'seconds' => $seconds,
                    'minutes' => ceil($seconds / 60),
                ]),
            ]);
        }
    }

    protected function throttleKey(): string
    {
        return Str::lower(trim($this->no_Peserta)) . '|' . request()->ip();
    }
}
