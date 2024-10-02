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


    <!-- Vendors Style-->
    <link rel="stylesheet" href="css/vendors_css.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/tailwind.min.css">

    <!-- Style-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/skin_color.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed-manu">
    <div class="wrapper">
        <header class="main-header">
            <div class="flex items-center logo-box justify-start">
                <!-- Logo -->
                <a href="index.html" class="logo flex gap-2">
                    <!-- logo-->
                    <div class="logo-mini w-40">
                        <span class="light-logo"><img src="images/Logo-Unai.png" alt="logo"></span>
                        <span class="dark-logo"><img src="images/Logo-Unai.png" alt="logo"></span>
                    </div>
                    <div class="logo-lg text-nowrap">
                        <span class="light-logo">Balai Bahasa</span>
                        <span class="dark-logo">Balai Bahasa</span>
                    </div>
                </a>
            </div>
            <!-- Header Navbar -->
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('layout.navbar', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-0', $__slots ?? [], get_defined_vars());

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

$__html = app('livewire')->mount($__name, $__params, 'lw-3670367056-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>
    <!-- Vendor JS -->
    <script src="js/vendors.min.js"></script>
    <script src="js/pages/chat-popup.js"></script>
    <script src="assets/icons/feather-icons/feather.min.js"></script>
    <script src="assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
    <script src="assets/vendor_components/fullcalendar-6/dist/index.global.js"></script>

    <script src="js/tailwind.min.js"></script>
    <!-- EduAdmin App -->
    <script src="js/demo.js"></script>
    <script src="js/template.js"></script>
    <script src="js/pages/dashboard.js"></script>

    <script>
        feather.replace();
    </script>


















































</body>
</html>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/layouts/app.blade.php ENDPATH**/ ?>