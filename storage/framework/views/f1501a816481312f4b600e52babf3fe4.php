<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo $__env->yieldContent('title'); ?> - Balai Bahasa UNAI</title>
    </head>
    <body>
        <?php echo e($slot); ?>

    </body>
</html>
<?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>