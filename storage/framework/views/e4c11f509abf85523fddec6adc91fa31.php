<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Component;
use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

?>

<aside class="main-sidebar">
    <!-- Sidebar -->
    <!--[if BLOCK]><![endif]--><?php if($auth == "mhs"): ?>
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="<?php echo e(Route::currentRouteName() == 'dashboard-mhs' ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('dashboard-mhs')); ?>">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview <?php echo e(Route::currentRouteName() == 'e3-schedule-mhs' || Route::currentRouteName() == 'toefl-schedule-mhs' ? 'active' : ''); ?>">
                            <a href="#">
                                <i data-feather="bookmark"></i>
                                <span>Pilih Jenis Tes</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="<?php echo e(route('e3-schedule-mhs')); ?>">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>E3
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('toefl-schedule-mhs')); ?>">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>TOEFL
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="<?php echo e(Route::currentRouteName() == 'history-mhs' ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('history-mhs')); ?>">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    <?php elseif($auth == "user"): ?>
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="<?php echo e(Route::currentRouteName() == 'dashboard-user' ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('dashboard-user')); ?>">
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
                                <li>
                                    <a href="<?php echo e(route('e3-schedule-user')); ?>">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>E3
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo e(route('toefl-schedule-user')); ?>">
                                        <i class="icon-Bookmark"><span class="path1"></span><span class="path2"></span></i>TOEFL
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="#">
                                <i data-feather="credit-card"></i>
                                <span>Pembayaran</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo e(route('history-user')); ?>">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    <?php elseif($auth == "admin"): ?>
        <section class="sidebar position-relative">
            <div class="multinav">
                <div class="multinav-scroll" style="height: 97%;">
                    <!-- sidebar menu-->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="<?php echo e(Route::currentRouteName() == 'dashboard-admin' ? 'active' : ''); ?>">
                            <a href="<?php echo e(route('dashboard-admin')); ?>">
                                <i data-feather="home"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="header fs-10 m-0 text-uppercase">Manajemen Ujian</li>
                        <li class="">
                            <a href="<?php echo e(route('ListRuangan')); ?>">
                                <i data-feather="plus-circle"></i>
                                <span>Ruangan</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo e(route('ListUjian')); ?>">
                                <i data-feather="edit"></i>
                                <span>Ujian</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="<?php echo e(route('ListTipeUjian')); ?>">
                                <i data-feather="tag"></i>
                                <span>Tipe Ujian</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <i data-feather="clock"></i>
                                <span>History</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</aside><?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views\livewire/layout/navigation.blade.php ENDPATH**/ ?>
