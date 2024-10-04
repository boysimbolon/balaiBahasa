<?php

use App\Livewire\Actions\Logout;
use Illuminate\Support\Facades\DB;
use Livewire\Volt\Component;
use App\Models\data_user;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

?>

<div class="flex items-center logo-box justify-start">
    <!-- Logo -->
    <!--[if BLOCK]><![endif]--><?php if($auth == "mhs"): ?>
        <a href="<?php echo e(route('dashboard-mhs')); ?>" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
                <span class="dark-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    <?php elseif($auth == "user"): ?>
        <a href="<?php echo e(route('dashboard-user')); ?>" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
                <span class="dark-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    <?php elseif($auth == "admin"): ?>
        <a href="<?php echo e(route('dashboard-admin')); ?>" class="logo flex gap-2">
            <!-- logo-->
            <div class="logo-mini w-40">
                <span class="light-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
                <span class="dark-logo"><img src="<?php echo e(asset('images/Logo-Unai.png')); ?>" alt="logo"></span>
            </div>
            <div class="logo-lg text-nowrap">
                <span class="light-logo">Balai Bahasa</span>
                <span class="dark-logo">Balai Bahasa</span>
            </div>
        </a>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
</div><?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views\livewire/layout/logo.blade.php ENDPATH**/ ?>