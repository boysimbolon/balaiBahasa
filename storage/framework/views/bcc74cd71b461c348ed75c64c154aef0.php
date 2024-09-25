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
<?php $component->withAttributes([]); ?>History <?php echo $__env->renderComponent(); ?>
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
            <table class="w-full">
                <tr class="bg-primary text-white text-left rounded h-8">
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
                <tr class="border-y">
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
                <tr class="border-y">
                    <td class="p-2">2024-08-16</td>
                    <td class="p-2">Lab CBT</td>
                    <td class="p-2">53</td>
                    <td class="p-2">49</td>
                    <td class="p-2">55</td>
                    <td class="p-2">523</td>
                    <td class="p-2">2308340</td>
                    <td class="p-2">
                        <button class="bg-primary py-2 px-4 rounded text-white">
                            Download
                        </button>
                    </td>
                </tr>
            </table>
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
<?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views\history.blade.php ENDPATH**/ ?>