<?php

use App\Livewire\Actions\Logout;
use App\Models\Data_User;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

//use Livewire\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();
        redirect()->route('login')->with('message', 'Berhasil Logout.');
    }

    public $data, $auth, $foto;

    public function mount()
    {

        // Pastikan Auth user t ersedia dan memiliki no_Peserta
        $authUser = Auth::guard('user')->user();
        $authAdmin = Auth::guard('admin')->user();
        if ($authUser && $authUser->no_Peserta) {
            $this->data = Data_User::where('no_Peserta', $authUser->no_Peserta)->first();
            $this->auth = 'user';
        } elseif (session('guard') === "mhs") {
            $this->data = session('atribut');
            $fotos = DB::connection('sqlsrv')->table('tb_foto_mhs')->where('nim', trim($this->data->nim))->first();

            $foto = trim($fotos->foto_url);
            $foto = str_replace('../../photo/mhs/', '', $foto);
            $this->foto = 'image.php?file=mhs/thumbnails/thumbnail.' . $foto;
            $this->auth = 'mhs';
        } elseif ($authAdmin && $authAdmin->no_Peserta) {
            $this->data = Data_User::where('no_Peserta', $authAdmin->no_Peserta)->first();
            $this->auth = 'admin';
        }
    }
};
?>

<div class="flex items-center logo-box justify-start">
    <!-- Logo -->
    @if($auth == "mhs")
        <a href="{{ route('dashboard-mhs') }}" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    @elseif($auth == "user")
        <a href="{{ route('dashboard-user') }}" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    @elseif($auth == "admin")
        <a href="{{ route('dashboard-admin') }}" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
                <span class="dark-logo"><img src="{{ asset('images/Logo-Unai.png') }}" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    @endif
</div>
