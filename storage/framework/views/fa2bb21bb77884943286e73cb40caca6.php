<?php $__env->startComponent('mail::message'); ?>
    # Verifikasi Email

    Terima kasih telah mendaftar di **<?php echo e(config('app.name')); ?>**! Berikut adalah informasi akun Anda:

    <?php $__env->startComponent('mail::panel'); ?>
        - **No Peserta**: <?php echo e($no_Peserta); ?>

        - **Password**: <?php echo e($password); ?>

    <?php echo $__env->renderComponent(); ?>

    Silakan klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun Anda:

    <?php $__env->startComponent('mail::button', ['url' => $verificationUrl]); ?>
        Verifikasi Email
    <?php echo $__env->renderComponent(); ?>

    Atau Anda juga dapat mengklik tautan berikut untuk melakukan aktivasi:

    [<?php echo e($verificationUrl); ?>](<?php echo e($verificationUrl); ?>)

    Terima kasih telah bergabung dengan kami!

    Salam hangat,
    **<?php echo e(config('app.name')); ?>**
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/emails/verify-email.blade.php ENDPATH**/ ?>
