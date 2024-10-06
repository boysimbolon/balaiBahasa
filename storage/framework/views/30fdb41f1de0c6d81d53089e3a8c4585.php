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
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 items-end">
        <div class="col-span-1 xl:col-span-3">
            <div class="box pull-up">
                <div class="box-body lg:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 items-center">
                        <div>
                            <img src="<?php echo e(asset('images/svg-icon/color-svg/custom-14.svg')); ?>" alt="Custom Icon">
                        </div>
                        <div class="col-span-1 lg:col-span-3">
                            <div class="text-3xl xl:text-4xl text-primary mb-15">
                                Hello <b><?php echo e($data->nama); ?></b>, Welcome Back!
                            </div>
                            <p class="text-dark text-lg mb-0">
                                Your course Overcoming the fear of public speaking was completed by 11 new users this week!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="no-shadow mb-0 bg-transparent">
            <div class="box-header no-border px-0">
                <div class="box-title text-xl">Your Courses</div>
                <ul class="pull-right flex">
                    <li class="dropdown">
                        <a data-bs-toggle="dropdown" class="btn btn-primary px-10 text-sm py-0 me-3" href="#">Most Popular <i class="fa-solid fa-angle-down"></i></a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i class="ti-import"></i> Import</a>
                            <a class="dropdown-item" href="#"><i class="ti-export"></i> Export</a>
                            <a class="dropdown-item" href="#"><i class="ti-printer"></i> Print</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#"><i class="ti-settings"></i> Settings</a>
                        </div>
                    </li>
                    <li>
                        <button class="btn btn-primary px-10 text-sm py-0">View All</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!--[if BLOCK]><![endif]--><?php $__currentLoopData = $ujian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="box bg-secondary-light pull-up border border-white" style="background-image: url('<?php echo e(asset('images/svg-icon/color-svg/st-1.svg')); ?>'); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">
                        <div class="flex-grow-1">
                            <div class="flex items-center pe-2 justify-between">
                                <div class="flex">
                                    <!--[if BLOCK]><![endif]--><?php if($hariSisa[$index] > 0): ?>
                                        <span class="badge badge-primary me-15">Soon</span>
                                    <?php elseif($hariSisa[$index] == 0): ?>
                                        <span class="badge badge-primary me-15">Active</span>
                                    <?php else: ?>
                                        <span class="badge badge-primary me-15">Inactive</span>
                                    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                                    <span class="badge badge-primary me-5"><i class="fa fa-lock"></i></span>
                                    <span class="badge badge-primary"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                            <a href="https://moodle.unai.edu/course/view.php?id=<?php echo e($data->listujian->environtmentUjian->no_modul); ?>" class="mt-25 mb-5 text-2xl text-blue-700">
                                <?php echo e($data->listujian->tipeUjian->jenis_ujian); ?>

                            </a>
                            <!--[if BLOCK]><![endif]--><?php if($hariSisa[$index] > 0): ?>
                                <p class="text-fade mb-0 fs-12"><?php echo e($hariSisa[$index]); ?> Days Left</p>
                            <?php elseif($hariSisa[$index] == 0): ?>
                                <p class="text-fade mb-0 fs-12">Today</p>
                            <?php else: ?>
                                <p class="text-fade mb-0 fs-12">Expired</p>
                            <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            <button onclick="salinText('<?php echo e($data->listujian->environtmentUjian->enroll_key); ?>')" class="btn btn-primary mt-10">Copy Enroll Key</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><!--[if ENDBLOCK]><![endif]-->
        </div>
    </div>

    <script>
        function salinText(enrollKey) {
            navigator.clipboard.writeText(enrollKey).then(function() {
                alert("Enroll key berhasil disalin");
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
<?php /**PATH E:\Balai_Bahasa\Balai_Bahasa\resources\views/livewire/dashboard-mhs.blade.php ENDPATH**/ ?>