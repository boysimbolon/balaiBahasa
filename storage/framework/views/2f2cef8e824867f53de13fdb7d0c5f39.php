<?php $__env->startSection('title', $title); ?>
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

    <h4 class="page-title text-2xl font-medium">E3 (English Entrance/Exit Exam)</h4>

    <div class="flex flex-col gap-x-4 mt-6">

        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal Anda</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--[if BLOCK]><![endif]--><?php if($pesan->isEmpty()): ?>
                                <tr class="border-y">
                                    <td class="p-2" colspan="5">Belum ada jadwal</td>
                                </tr>
                            <?php else: ?>
                                <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'], ['listujian.jam', 'asc']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psn => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <!--[if BLOCK]><![endif]--><?php if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian != '3' && $data->status == '1'): ?>
                                        <tr class="border-y">
                                            <td class="p-2"><?php echo e($data->listujian->tipeujian->jenis_ujian); ?></td>
                                            <td class="p-2"><?php echo e($tgl[$psn] ?? 'N/A'); ?></td>
                                            <td class="p-2"><?php echo e($jm[$psn] ?? 'N/A'); ?></td>
                                            <td class="p-2"><?php echo e($data->listruangan->nama_ruangan); ?></td>
                                            <td class="p-2"><?php echo e($created[$psn] ?? 'N/A'); ?></td>
                                        </tr>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal English Entrance Exam</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Kapasitas</th>
                                <th>Sisa Kuota</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tanggal->sort(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tgl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--[if BLOCK]><![endif]--><?php if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '1'): ?>
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
                                                <button class="bg-primary text-white py-2 px-4 rounded" wire:click="Pesan(<?php echo e($jenis[$index]); ?>, <?php echo e($kapasitas[$index]); ?>)" wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal English Exit Exam</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Kapasitas</th>
                                <th>Sisa Kuota</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $tanggal->sort(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tgl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '2'): ?>
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
                                                <button class="bg-primary text-white py-2 px-4 rounded" wire:click="Pesan(<?php echo e($jenis[$index]); ?>, <?php echo e($kapasitas[$index]); ?>)" wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
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
                            </tbody>
                        </table>
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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/e3-schedule-mhs.blade.php ENDPATH**/ ?>
