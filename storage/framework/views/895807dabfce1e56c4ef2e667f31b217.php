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
            <div class="w-full bg-green-600 p-2 rounded text-white">
                <?php echo e(session('message')); ?>

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
                        </tr>
                        <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psn => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--[if BLOCK]><![endif]--><?php if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian == '3' && $data->status=='1'): ?>
                                <tr class="border-y">
                                    <td class="p-2"><?php echo e($data->listujian->tipeujian->jenis_ujian); ?></td>
                                    <td class="p-2"><?php echo e($tgl[$psn] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($jm[$psn] ?? 'N/A'); ?></td>
                                    <td class="p-2"><?php echo e($data->listruangan->nama_ruangan); ?></td>
                                    <td class="p-2"><?php echo e($created[$psn] ?? 'N/A'); ?></td>
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
                                                    wire:click="pesan(<?php echo e($jenis[$index]->id); ?>, <?php echo e($kapasitas[$index]); ?>)"
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