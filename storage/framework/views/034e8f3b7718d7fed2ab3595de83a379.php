<?php $__env->startSection('title', $title); ?>
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
                                <?php echo e($data['temp_lahir']); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tanggal Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <?php echo e($data['tgl_lahir']); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Jenis Kelamin</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <!--[if BLOCK]><![endif]--><?php if($data['sex'] == 'L'): ?>
                                    Laki-laki
                                    <?php else: ?>
                                    Perempuan
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Alamat</span>
                                <span class="w-1/2 md:w-fit flex items-center gap-5 text-right md:text-left text-wrap">
                                <span class="hidden md:block">:</span>
                                <?php echo e($alamat); ?>

                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pekerjaan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Mahasiswa
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">NIDN</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Instansi</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Universitas Advent Indonesia
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                S1
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tahun Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                2024
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Kewarganegaraan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Indonesia
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Bahasa</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Indonesia
                            </span>
                            </p>
                        </div>









                    </div>
                </div>
                <div class="w-full order-1 xl:order-2 xl:w-1/3">
                    <div class="bg-white drop-shadow-lg h-fit mt-1 rounded p-5">
                        <div class="flex items-center flex-col gap-4 mb-5">
                            <img src="<?php echo e('https://online.unai.edu/mhs/'.$foto); ?>" alt="" width="200" height="300" class="rounded-xl">
                            <div class="text-center">
                                <h1 class="text-xl font-bold"><?php echo e($data['nama']); ?></h1>
                                <p class="text-center"><?php echo e($data['nim']); ?></p>
                            </div>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Telepon</span>
                                <span><?php echo e($data['notelp']); ?></span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center w-full">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Email</span>
                                <span class="text-wrap"><?php echo e($data['email']); ?></span>
                            </p>
                        </div>
                    </div>
                </div>
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
</div>
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/biodata-mhs.blade.php ENDPATH**/ ?>