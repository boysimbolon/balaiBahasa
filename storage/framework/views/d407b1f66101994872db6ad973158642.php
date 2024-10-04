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
    <h4 class="page-title text-2xl font-medium">Profil</h4>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
        <div class="lg:order-1">
            <div class="card text-center">
                <div class="card-body">
                    <img src="<?php echo e('https://online.unai.edu/mhs/'.$foto); ?>" class="bg-light w-100 h-100 rounded-full mx-auto avatar-lg img-thumbnail" alt="profile-image">

                    <h4 class="mb-0 mt-2 text-2xl font-medium"><?php echo e($data['nama']); ?></h4>
                    <p class="text-muted text-base my-10">(<?php echo e(trim($data['nim'])); ?>)</p>

                    <div class="text-start mt-3">
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Telepon</strong><span class="ms-2"><?php echo e($data['notelp']); ?></span></p>
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Email</strong> <span class="ms-2 "><?php echo e($data['email']); ?></span></p>
                        <p class="text-muted mb-1 flex justify-between"><strong class="text-info">Kewarganegaraan</strong> <span class="ms-2">Indonesia</span></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-span-2">
            <div class="box">
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tempat Lahir</span>
                            <span><?php echo e($data['temp_lahir']); ?></span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tanggal Lahir</span>
                            <span><?php echo e($data['tgl_lahir']); ?></span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Jenis Kelamin</span>
                            <span>
                                <!--[if BLOCK]><![endif]--><?php if($data['sex'] == 'L'): ?>
                                    Laki-laki
                                <?php else: ?>
                                    Perempuan
                                <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
                            </span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Alamat</span>
                            <span><?php echo e($alamat); ?></span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Pekerjaan</span>
                            <span>Mahasiswa</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">NIDN</span>
                            <span></span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Instansi</span>
                            <span>Universitas Advent Indonesia</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Pendidikan</span>
                            <span>S1</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tahun Pendidikan Pendidikan</span>
                            <span>2024</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Bahasa</span>
                            <span>Indonesia</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
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
<?php /**PATH C:\Users\Acer\Documents\Universitas Advent Indonesia\Labor\balai_bahasa\balaiBahasa\resources\views/livewire/biodata-mhs.blade.php ENDPATH**/ ?>