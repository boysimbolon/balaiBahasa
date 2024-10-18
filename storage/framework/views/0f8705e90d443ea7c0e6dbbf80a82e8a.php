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
        <div class="w-full bg-green-600 p-2 rounded text-white" >
            <?php echo e(session('message')); ?>

        </div>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <h4 class="page-title text-2xl font-medium">Pembayaran</h4>
    <div class="grid grid-cols-1 gap-4 mt-6">
        <div>
            <div class="box">
                <div class="box-body">
                    <p class="mb-4">Untuk melanjutkan proses pendaftaran ujian, Anda diwajibkan untuk melakukan pembayaran Ujian. Pembayaran dapat dilakukan melalui BNI Virtual Account.</p>
                    <div class="flex justify-between items-center mt-3 mx-5">
                        <h2 class="box-title text-xl m-0 font-bold">Nomor Virtual Account : <?php echo e($va); ?></h2>
                        <div class="flex rounded border-gray-100 border-2 p-1 cursor-pointer"  onclick="copyToClipboard(<?php echo e($va); ?>)">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path fill="currentColor" d="M9 18q-.825 0-1.412-.587T7 16V4q0-.825.588-1.412T9 2h9q.825 0 1.413.588T20 4v12q0 .825-.587 1.413T18 18zm-4 4q-.825 0-1.412-.587T3 20V6h2v14h11v2z"/></svg>
                            <span class="items-center flex" id="salin">Salin</span>
                            <span class="items-center flex hidden text-green-600" id="message">Tersalin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">History Pembayaran</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $Data->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $psn => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!--[if BLOCK]><![endif]--><?php if(isset($data->listujian->id_jenis_ujian)): ?>
                                    <tr class="border-y">
                                        <td class="p-2"><?php echo e($data->listujian->tipeujian->jenis_ujian); ?></td>
                                        <td class="p-2"><?php echo e($tgl[$psn] ?? 'N/A'); ?></td>
                                        <td class="p-2"><?php echo e($jm[$psn] ?? 'N/A'); ?></td>
                                        <td class="p-2"><?php echo e($data->listruangan->nama_ruangan); ?></td>
                                        <td class="p-2"><?php echo e($created[$psn] ?? 'N/A'); ?></td>
                                        <td class="p-2">
                                            <!--[if BLOCK]><![endif]--><?php if(!$data->status): ?>
                                                <button class="bg-primary text-white py-2 px-4 rounded"
                                                        wire:click="Cek(<?php echo e($data); ?>)"
                                                        wire:confirm="Apakah Anda sudah melakukan Pembayaran?">Bayar</button>
                                            <?php else: ?>
                                                Berhasil
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
        <script>
            function copyToClipboard(text) {
                // Gunakan navigator.clipboard untuk menyalin teks
                navigator.clipboard.writeText(text).then(function() {
                    console.log('Teks berhasil disalin:', text);

                    // Tampilkan pesan sukses
                    var successMessage = document.getElementById("message");
                    var salin = document.getElementById("salin");
                    successMessage.style.display = "block";
                    salin.style.display = "none";

                    // Sembunyikan pesan setelah 2 detik
                    setTimeout(function() {
                        successMessage.style.display = "none";
                        salin.style.display = "block";
                    }, 2000);
                }).catch(function(err) {
                    console.error('Gagal menyalin teks:', err);
                });
            }

        </script>



















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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/pembayaran.blade.php ENDPATH**/ ?>