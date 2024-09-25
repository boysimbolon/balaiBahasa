<div>
    <?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="p-5 h-full">
            <?php if (isset($component)) { $__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.heading-page','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('heading-page'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>Profil <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $attributes = $__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $component = $__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>
            <div class="flex flex-col xl:flex-row gap-5">
                <div class="bg-white drop-shadow-lg w-full order-2 xl:order-1 xl:w-2/3 mt-1 rounded p-5 flex flex-col gap-4">
                    <div class="divide-y-2">
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tempat Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->tmpt_lahir); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tanggal Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->tgl_lahir); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Jenis Kelamin</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->jenis_kelamin); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Alamat</span>
                                <span class="w-1/2 md:w-fit flex items-center gap-5 text-right md:text-left text-wrap">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->alamat); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pekerjaan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->pekerjaan); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">NIDN</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->NIDN); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Instansi</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->instansi); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->Pendidikan); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tahun Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->thn_lulus); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Kewarganegaraan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->kewarganegaraan); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Bahasa</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($users->bhs_seharian); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center py-3">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">KTP</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <img src="<?php echo e(asset('storage/' . $users->ktp)); ?>" alt="" width="300" height="200" class="rounded-xl">
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full order-1 xl:order-2 xl:w-1/3">
                    <div class="bg-white drop-shadow-lg h-fit mt-1 rounded p-5">
                        <div class="flex items-center flex-col gap-4 mb-5">
                            <img src="<?php echo e(asset('storage/' . $users->pasFoto)); ?>" width="200" height="300" alt="" class="rounded-xl">
                            <div class="text-center">
                                <h1 class="text-xl font-bold"><?php echo e($users->nama); ?></h1>
                                <p class="text-center"><?php echo e($users->no_Peserta); ?></p>
                            </div>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Telepon</span>
                                <span><?php echo e($users->num_telp); ?></span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center w-full">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Email</span>
                                <span class="text-wrap"><?php echo e($email->email); ?></span>
                            </p>
                        </div>
                    </div>
                    <a class="text-center mt-5 bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md hidden xl:block" href="<?php echo e(route('edit-profile-user')); ?>">Edit Profile</a>
                </div>
                <a class="text-center bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md order-3 xl:hidden" href="<?php echo e(route('edit-profile-user')); ?>">Edit Profile</a>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
</div><?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views\livewire\biodatausr.blade.php ENDPATH**/ ?>