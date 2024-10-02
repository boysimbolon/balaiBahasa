<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Component;
use App\Models\data_user;
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
            $this->data = data_user::where('no_Peserta', $authUser->no_Peserta)->first();
            $this->auth = 'user';
        } elseif (session('guard') === "mhs") {
            $this->data = session('atribut');
            $fotos = DB::connection('sqlsrv')->table('tb_foto_mhs')->where('nim', trim($this->data->nim))->first();

            $foto=trim($fotos->foto_url);
            $foto = str_replace('../../photo/mhs/', '', $foto);
            $this->foto = 'image.php?file=mhs/thumbnails/thumbnail.'.$foto;
            $this->auth = 'mhs';
        } elseif ($authAdmin && $authAdmin->no_Peserta) {
            $this->data = data_user::where('no_Peserta', $authAdmin->no_Peserta)->first();
            $this->auth = 'admin';
        }
    }
};
?>

<aside class="main-sidebar">
    <!-- Sidebar -->
    @if($auth == "mhs")
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview {{ Route::currentRouteName() == 'dashboard-mhs' ? 'active menu-open' : '' }}">
                            <a href="{{ route('dashboard-mhs') }}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="bookmark"></i>
                                <span>Pilih Jenis Tes</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>E3
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>TOEFL
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    @elseif($auth == "user")
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="bookmark"></i>
                                <span>Pilih Jenis Tes</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>E3
                                    </a>
                                </li>
                                <li class="treeview">
                                    <a href="#">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>TOEFL
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    @elseif($auth == "admin")
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="treeview {{ Route::currentRouteName() == 'dashboard-admin' ? 'active menu-open' : '' }}">
                            <a href="{{ route('dashboard-admin') }}">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="header fs-10 m-0 text-uppercase">Manajemen Ujian</li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="plus-circle"></i>
                                <span>Ruangan</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="edit"></i>
                                <span>Ujian</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="tag"></i>
                                <span>Tipe Ujian</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    @endif
</aside>
