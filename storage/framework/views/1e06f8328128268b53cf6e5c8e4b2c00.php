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
<?php $component->withAttributes([]); ?>E3 (English Entrance/Exit Exam) <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $attributes = $__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__attributesOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f)): ?>
<?php $component = $__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f; ?>
<?php unset($__componentOriginal93ae7e49b3b5cc9833352ed00e3f3a0f); ?>
<?php endif; ?>

            <div class="bg-white max-w-full drop-shadow-lg mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full shadow-xl">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Jenis Ujian</th>
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="p-3 whitespace-nowrap">Waktu Pilih</th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">English Entrance Exam</td>
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">08:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">Minggu, 11 Agustus 2024</td>
                            </tr>
                            <tr>
                                <td class="p-3 whitespace-nowrap">English Exit Exam</td>
                                <td class="p-3 whitespace-nowrap">Rabu, 11 Desember 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab Komputer 1</td>
                                <td class="p-3 whitespace-nowrap">Minggu, 8 Desember 2024</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Entrance Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Entrance Exam</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full rounded">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Kuota</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jumlah</th>
                                <th class="p-3"></th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3">
                                    Penuh
                                </td>
                            </tr>
                            <tr class="">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">13:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">20</td>
                                <td class="p-3">
                                    <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Exit Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Exit Exam</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full rounded">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Kuota</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jumlah</th>
                                <th class="p-3"></th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3">
                                    Penuh
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">13:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">20</td>
                                <td class="p-3">
                                    <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                                </td>
                            </tr>
                        </table>
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
</div><?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views\livewire\e3schedule.blade.php ENDPATH**/ ?>