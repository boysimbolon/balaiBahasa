<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('title'); ?> - Balai Bahasa UNAI</title>

        <!-- Favicon -->
        <link rel="icon" href="Logo-Unai.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center bg-gray-200 p-5 xl:p-20">






            <div class="mt-6 p-5 bg-white shadow-md rounded-xl md:w-2/3 lg:w-1/4 <?php echo e(Route::is('register') ? 'lg:w-1/2' : ''); ?>">
                <?php echo e($slot); ?>

            </div>
        </div>
    </body>
</html>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/layouts/guest.blade.php ENDPATH**/ ?>