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

    <!-- Vendors Style-->
    <link rel="stylesheet" href="<?php echo e(asset('css/vendors_css.css')); ?>">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/tailwind.min.css')); ?>">

    <!-- Style-->
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/skin_color.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed-manu">
    <div class="wrapper">
        <header class="main-header">
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.logo', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
            <!-- Header Navbar -->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.navbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </header>

        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.navigation', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-2', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>

        <div class="content-wrapper">
            <div>
                <section class="content">
                    <?php echo e($slot); ?>

                </section>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <script src="<?php echo e(asset('js/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/chat-popup.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/icons/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor_components/datatable/datatables.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor_components/fullcalendar-6/dist/index.global.js')); ?>"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="<?php echo e(asset('js/tailwind.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>
    <script src="<?php echo e(asset('js/template.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/dashboard.js')); ?>"></script>
    <script src="<?php echo e(asset('js/pages/app-contact.js')); ?>"></script>
    <script>
        feather.replace();
    </script>


















































</body>
</html>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/layouts/app.blade.php ENDPATH**/ ?>
