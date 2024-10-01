<div>
    <form wire:submit.prevent="save">
        <div>
            <label for="jenis_ujian">Jenis Ujian</label>
            <input type="text" id="jenis_ujian" wire:model="jenis_ujian">
            <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['jenis_ujian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="error"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/create-tipe-ujian.blade.php ENDPATH**/ ?>