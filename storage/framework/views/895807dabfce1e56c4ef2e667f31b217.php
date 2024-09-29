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
        <!--[if BLOCK]><![endif]--><?php if(session()->has('message')): ?>
            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    <?php echo e(session('message')); ?>

                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Exit</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        <?php elseif(session()->has('error')): ?>
            <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    <?php echo e(session('error')); ?>

                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Exit</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
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
<?php $component->withAttributes([]); ?>TOEFL (Test of English as a Foreign Language) <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $attributes = $__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $component = $__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>
            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Jenis Ujian</th>
                            <th class="p-2">Tanggal Ujian</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Waktu Pesan</th>
                            <th class="p-2">See Moodle</th>
                        </tr>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psn => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian == '3' && $data->status=='1'): ?>
                                <tr class="border-y">
                                    <td class="p-2"><?php echo e($data->listujian->tipeujian->jenis_ujian); ?></td>
                                    <td class="p-2"><?php echo e($tgl[$psn] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($jm[$psn] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($data->listruangan->nama_ruangan); ?></td>
                                    <td class="p-2"><?php echo e($created[$psn] ?? 'N/A'); ?></td>
                                    <td class="p-2">
                                        <div class="p-1 gap-3 flex">
                                        <a href="" target="_blank" class="text-primary">Link Moodle</a>
                                            <span>Enroll Key: u4JKid</span>
                                        </div>
                                    </td>
                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </table>
                </div>

                <!-- Entrance Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal TOEFL</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Tanggal</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Kapasitas</th>
                            <th class="p-2">Sisa Kuota</th>
                            <th class="p-2"></th>
                        </tr>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tanggal->sort(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tgl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '3'): ?>
                                <tr class="border-y">
                                    <td class="p-2"><?php echo e($tgl); ?></td>
                                    <td class="p-2"><?php echo e($jam[$index] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($ruangan[$index]->listruangan->nama_ruangan ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($kapasitas[$index] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($kuota[$index] ?? 'N/A'); ?></td>
                                    <td class="p-2">
                                        <?php
                                            $statusPesan = $pesan->firstWhere('id_ujian', $jenis[$index]->id);
                                        ?>
                                        <?php if($kuota[$index] == 0): ?>
                                            Penuh
                                        <?php elseif($kuota[$index] > 0 && !$statusPesan): ?>
                                            <button class="bg-primary text-white py-2 px-4 rounded"
                                                    wire:click="Pesan(<?php echo e($jenis[$index]); ?>, <?php echo e($kapasitas[$index]); ?>)"
                                                    wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
                                        <?php else: ?>
                                            <!--[if BLOCK]><![endif]--><?php if($statusPesan): ?>
                                                <!--[if BLOCK]><![endif]--><?php if($statusPesan->status == "1"): ?>
                                                    Done
                                                <?php else: ?>
                                                    Bayar
                                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                        <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    </td>

                                </tr>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                    </table>
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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/toefl-schedule-mhs.blade.php ENDPATH**/ ?>