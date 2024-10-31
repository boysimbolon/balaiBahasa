<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Component;
use App\Models\Data_User;
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
        session()->flash('message', 'Berhasil Logout.');
        $this->redirect(route('login'), navigate: true);

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

<nav class="navbar navbar-static-top flow-root">
    <!-- Sidebar toggle button-->
    <div class="float-left">
        <ul class="header-megamenu nav flex items-center">
            <li class="btn-group nav-item inline-flex">
                <a href="#" class="waves-effect waves-light nav-link push-btn bg-blue-600" data-toggle="push-menu"
                   role="button">
                    <i data-feather="menu"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="navbar-custom-menu r-side inline-flex items-center float-right">
        <ul class="nav navbar-nav inline-flex items-center">
            {{--            <li class="dropdown notifications-menu inline-flex rounded-md">--}}
            {{--                <label class="switch">--}}
            {{--                    <a class="waves-effect waves-light btn-primary-light svg-bt-icon">--}}
            {{--                        <input type="checkbox" data-mainsidebarskin="toggle" id="toggle_left_sidebar_skin">--}}
            {{--                        <span class="switch-on"><i data-feather="moon"></i></span>--}}
            {{--                        <span class="switch-off"><i data-feather="sun"></i></span>--}}
            {{--                    </a>--}}
            {{--                </label>--}}
            {{--            </li>--}}
            <!-- User Account-->
            <li class="btn-group d-xl-inline-flex d-none">
                <a href="#" id="dropdownDividerButton" data-dropdown-toggle="dropdownDivider-2"
                   class="justify-center btn-primary-light hover:text-white svg-bt-icon hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm !px-px !py-px text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                   type="button">
                    @if($auth == "mhs")
                        <img src="{{'https://online.unai.edu/mhs/'.$foto}}" class="avatar rounded-full !h-11 !w-11 mt-1"
                             alt="Mahasiswa"/>
                    @elseif($auth == 'user')
                        <img src="{{ asset('storage/' . $data->pasFoto) }}"
                             class="avatar rounded-full !h-11 !w-11 mt-1 object-cover object-top" alt="Umum"/>
                    @elseif($auth == 'admin')
                        <img src="{{ asset('storage/' . $data->pasFoto) }}"
                             class="avatar rounded-full !h-11 !w-11 mt-1 object-cover object-top" alt="Admin"/>
                    @endif
                </a>
                <div id="dropdownDivider-2"
                     class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 drop-shadow-lg"
                        aria-labelledby="dropdownDividerButton">
                        @if($auth == "mhs")
                            <li>
                                <a href="{{route('biodata-mhs')}}" wire:navigate
                                   class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <i class="fa fa-user-circle-o me-3 text-xl" aria-hidden="true"> </i> My Profile
                                </a>
                            </li>
                            <li>
                                <a class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer"
                                   wire:click="logout" wire:navigate>
                                    <i class="fa-solid fa-right-from-bracket me-3 text-xl"> </i> Logout
                                </a>
                            </li>
                        @elseif($auth == 'user')
                            <li>
                                <a href="{{ route('biodataUser') }}"
                                   class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <i class="fa fa-user-circle-o me-3 text-xl" aria-hidden="true"> </i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('change-password-user') }}"
                                   class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-nowrap">
                                    <i class="fa fa-key me-3 text-xl" aria-hidden="true"> </i> Ganti Password
                                </a>
                            </li>
                            <li>
                                <a class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer"
                                   wire:click="logout">
                                    <i class="fa-solid fa-right-from-bracket me-3 text-xl"> </i> Logout
                                </a>
                            </li>
                        @elseif($auth == 'admin')
                            <li>
                                <a href="{{route('biodataAdmin')}}"
                                   class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                    <i class="fa fa-user-circle-o me-3 text-xl" aria-hidden="true"> </i> My Profile
                                </a>
                            </li>
                            {{--                            <li>--}}
                            {{--                                <a href="{{route('edit-profile-admin')}}" class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white text-nowrap">--}}
                            {{--                                    <i class="fa fa-key me-3 text-xl" aria-hidden="true"> </i> Ganti Password--}}
                            {{--                                </a>--}}
                            {{--                            </li>--}}
                            <li>
                                <a href="#"
                                   class="items-center m-0 text-base flex px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white cursor-pointer"
                                   wire:click="logout">
                                    <i class="fa fa-right-from-bracket me-3 text-xl"></i> </i> Logout
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
