<?php $__env->startComponent('mail::message'); ?>
    <div style="text-align: center; font-family: Arial, sans-serif; color: #333;">
        <h1 style="color: #4CAF50;">Verifikasi Email</h1>
        <p>Terima kasih telah mendaftar di <strong><?php echo e(config('app.name')); ?></strong>! Berikut adalah informasi akun Anda:</p>

        <div style="background-color: #f9f9f9; padding: 20px; border-radius: 5px; margin: 20px 0;">
            <p><strong>No Peserta:</strong> <?php echo e($no_Peserta); ?></p>
            <p><strong>Password:</strong> <?php echo e($password); ?></p>
        </div>

        <p>Silakan klik tombol di bawah ini untuk memverifikasi email Anda dan mengaktifkan akun Anda:</p>

        <?php $__env->startComponent('mail::button', ['url' => $verificationUrl, 'color' => 'success']); ?>
            Verifikasi Email
        <?php echo $__env->renderComponent(); ?>

        <p>Atau Anda juga dapat mengklik tautan berikut untuk melakukan aktivasi:</p>
        <p><a href="<?php echo e($verificationUrl); ?>" style="color: #4CAF50;"><?php echo e($verificationUrl); ?></a></p>

        <p>Terima kasih telah bergabung dengan kami!</p>
        <p>Salam hangat,<br><strong><?php echo e(config('app.name')); ?></strong></p>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/emails/verify-email.blade.php ENDPATH**/ ?>