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
    <?php elseif($auth == "user"): ?>
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
    <?php elseif($auth == "admin"): ?>
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
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</aside><?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views\livewire/layout/navigation.blade.php ENDPATH**/ ?>