@section('title', $title)

<x-app-layout>
    <div class="grid grid-cols-1 xl:grid-cols-4 gap-4 items-end">
        <div class="col-span-1 xl:col-span-3">
            <div class="box pull-up">
                <div class="box-body lg:p-0">
                    <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 items-center">
                        <div>
                            <img src="{{ asset('images/svg-icon/color-svg/custom-14.svg') }}" alt="Custom Icon">
                        </div>
                        <div class="col-span-1 lg:col-span-3">
                            <div class="text-3xl xl:text-4xl text-primary mb-15">
                                Hello <b>{{ $data->nama }}</b>, Welcome Back!
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
            @foreach($ujian as $index => $datas)
                @if(isset($datas->listujian->environtmentUjian))
                <div class="box bg-secondary-light pull-up border border-white" style="background-image: url('{{ asset('images/svg-icon/color-svg/st-1.svg') }}'); background-position: right bottom; background-repeat: no-repeat;">
                    <div class="box-body">
                        <div class="flex-grow-1">
                            <div class="flex items-center pe-2 justify-between">
                                <div class="flex">
                                    @if($hariSisa[$index] > 0)
                                        <span class="badge badge-primary me-15">Soon</span>
                                    @elseif($hariSisa[$index] == 0)
                                        <span class="badge badge-primary me-15">Active</span>
                                    @else
                                        <span class="badge badge-primary me-15">Inactive</span>
                                    @endif
                                    <span class="badge badge-primary me-5"><i class="fa fa-lock"></i></span>
                                    <span class="badge badge-primary"><i class="fa fa-clock-o"></i></span>
                                </div>
                            </div>

                            {{-- Cek apakah $datas->listujian dan environtmentUjian tidak null --}}
                                <a href="https://moodle.unai.edu/course/view.php?id={{ $datas->listujian->environtmentUjian->no_modul }}" class="mt-25 mb-5 text-2xl text-blue-700">
                                    {{ $datas->listujian->tipeUjian->jenis_ujian }}
                                </a>

                            @if($hariSisa[$index] > 0)
                                <p class="text-fade mb-0 fs-12">{{ $hariSisa[$index] }} Days Left</p>
                            @elseif($hariSisa[$index] == 0)
                                <p class="text-fade mb-0 fs-12">Today</p>
                            @else
                                <p class="text-fade mb-0 fs-12">Expired</p>
                            @endif

                            {{-- Cek apakah enroll_key ada --}}
                                <button onclick="salinText('{{ $datas->listujian->environtmentUjian->enroll_key }}')" class="btn btn-primary mt-10">Copy Enroll Key</button>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
    </div>

    <script>
        function salinText(enrollKey) {
            navigator.clipboard.writeText(enrollKey).then(function() {
                alert("Enroll key berhasil disalin");
            });
        }
    </script>
</x-app-layout>
