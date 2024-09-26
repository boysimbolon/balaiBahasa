<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?> - Balai Bahasa UNAI</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body class="font-sans antialiased h-screen">
<!-- Navbar -->
<nav class="fixed h-20 w-full md:w-screen drop-shadow-lg bg-white flex items-center z-20">
    <!-- Menu -->
    <div id="menuIcon" class="w-[72px] h-full flex items-center justify-center bg-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list hover:cursor-pointer" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
        </svg>
    </div>

    <!-- Navbar Heading -->
    <div class="ml-5 flex items-center gap-3">
        <a href="<?php echo e(route('dashboard-mhs')); ?>" class="w-10 h-10">
            <img src="<?php echo e(asset('Logo-Unai.png')); ?>" alt="Unai Logo" class="aspect-square">
        </a>
        <a href="<?php echo e(route('dashboard-mhs')); ?>" class="text-2xl font-semibold">Balai Bahasa UNAI</a>
    </div>
</nav>

<div class="min-h-screen flex">
    <!-- Sidebar -->
    <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

    <!-- Page Content -->
    <main class="pt-20 bg-neutral-100 min-h-screen transition-spacing duration-700 ease-in-out z-0 <?php echo e(Route::is('history-mhs') || Route::is('e3-schedule-mhs') || Route::is('toefl-schedule-mhs') || Route::is('toefl-schedule-user') || Route::is('history-user') ? 'w-fit md:w-full' : 'w-full'); ?>" id="mainContent">
        <?php echo e($slot); ?>

    </main>
</div>

<script>
    const menuIcon = document.getElementById('menuIcon');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const profileDropdown = document.getElementById('profileDropdown');


    menuIcon.addEventListener('click', function () {
        sidebar.classList.toggle('translate-x-full');
        mainContent.classList.toggle('md:ml-60');
    });

    function openProfileDropdown() {
        document.getElementById('profileDropdown').classList.toggle('hidden');
        document.getElementById('caret1').classList.toggle('rotate-180');
    }

    function openTypeDropdown() {
        document.getElementById('typeDropdown').classList.toggle('hidden');
        document.getElementById('caret2').classList.toggle('rotate-180');
    }
</script>
</body>
</html>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/layouts/app.blade.php ENDPATH**/ ?>