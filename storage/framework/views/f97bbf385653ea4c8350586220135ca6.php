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
    <h4 class="page-title text-2xl font-medium">History</h4>
    <div class="grid grid-rows-1 gap-x-4 mt-6">
        <div class="">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th class="p-2" rowspan="2">Tanggal</th>
                                <th class="p-2" rowspan="2">Lokasi</th>
                                <th class="p-2 text-center" colspan="4">Nilai</th>
                                <th class="p-2" rowspan="2">No Sert</th>
                                <th class="p-2" rowspan="2">Sertifikat</th>
                            </tr>
                            <tr class="bg-primary text-white text-left border-y h-10">
                                <th>Listening</th>
                                <th>Structure</th>
                                <th>Reading</th>
                                <th>Skor</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="p-2">2024-08-15</td>
                                <td class="p-2">Lab CBT</td>
                                <td class="p-2">51</td>
                                <td class="p-2">51</td>
                                <td class="p-2">51</td>
                                <td class="p-2">520</td>
                                <td class="p-2">2308301</td>
                                <td class="p-2">
                                    <button class="bg-primary py-2 px-4 rounded text-white">
                                        Download
                                    </button>
                                </td>
                            </tr>
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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/history-mhs.blade.php ENDPATH**/ ?>
