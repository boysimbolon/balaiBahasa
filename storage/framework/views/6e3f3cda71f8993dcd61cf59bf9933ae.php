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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>