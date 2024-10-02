@section('title', $title)
<x-app-layout>
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 items-end">
        <div class="col-span-1 xl:col-span-3">
            <div class="box pull-up">
                <div class="box-body lg:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 items-center">
                        <div><img src="../../../images/svg-icon/color-svg/custom-14.svg" alt=""></div>
                        <div class="col-span-1 lg:col-span-3">
                            <div class="text-3xl xl:text-4xl text-primary mb-15">Hello <b>{{ $data->nama }}</b>, Welcome Back!</div>
                            <p class="text-dark text-lg mb-0">
                                Your course Overcoming the fear of public speaking was completed by 11 New users this week!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div>
            <div class="no-shadow mb-0 bg-transparent">
                <div class="box-header no-border px-0">
                    <div class="box-title text-xl">Your Courses</div>
                    <ul class="pull-right flex">
                        <li class="dropdown">
                            <a data-bs-toggle="dropdown" class="btn btn-primary px-10 text-sm py-0 me-3" href="#" class="px-10 pt-5">Most Popular <i class="fa-solid fa-angle-down"></i></a>
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
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div>
                <div class="box bg-secondary-light pull-up border border-white" style="background-image: url(../../../images/svg-icon/color-svg/st-1.svg); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">
                        <div class="flex-grow-1">
                            <div class="flex items-center pe-2 justify-between">
                                <div class="flex">
                                    <span class="badge badge-primary me-15">Active</span>
                                    <span class="badge badge-primary me-5"><i class="fa fa-lock"></i></span>
                                    <span class="badge badge-primary"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>
                            <div class="mt-25 mb-5 text-2xl">Test</div>
                            <p class="text-fade mb-0 fs-12">45 Days Left</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
