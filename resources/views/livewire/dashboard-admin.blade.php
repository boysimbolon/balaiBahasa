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
{{--                            <p class="text-dark text-lg mb-0">--}}
{{--                                Your course Overcoming the fear of public speaking was completed by 11 New users this week!--}}
{{--                            </p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 md:gap-4">
        <div class="col-span-2">
            <div class="card">
                <div class="card-header">
                    <div class="text-xl font-medium mb-0">Peserta</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table" style="width:100%">
                            <thead>
                            <tr class="border-b">
                                <th>#</th>
                                <th class="text-start">Nama</th>
                                <th class="text-start">Instansi</th>
                                <th class="text-start">Email</th>
                                <th class="text-start">Status</th>
                            </tr>
                            </thead>
                            <tbody class="text-fade">
                            @foreach($all_data_user as $data)
                                <tr class="border-b">
                                    <td class="flex justify-center items-center">
                                        <img src="{{ asset('storage/' . $data->pasFoto) }}" width="32" height="32" class="bg-light rounded-full my-n1 aspect-square object-cover " alt="Avatar">
                                    </td>
                                    <td>{{ $data->nama }}</td>
                                    <td>{{ $data->instansi }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td><span class="badge bg-success-light p-2">Active</span></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title text-xl font-medium">List Ruangan</h4>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        @foreach($ruangan_ujians as $ruangan)
                            <a class="media media-single" href="#">
                                <i data-feather="list"></i>
                                <span class="title text-mute">{{ $ruangan->nama_ruangan }}</span>
                            </a>
                        @endforeach
{{--                        <a class="media media-single" href="#">--}}
{{--                            <i data-feather="list"></i>--}}
{{--                            <span class="title text-mute">Ruangan 1</span>--}}
{{--                        </a>--}}
{{--                        <a class="media media-single" href="#">--}}
{{--                            <i data-feather="list"></i>--}}
{{--                            <span class="title text-mute">Ruangan 2</span>--}}
{{--                        </a>--}}
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title text-xl font-medium">List Tipe Ujian</h4>
                </div>
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        @foreach($tipe_ujians as $tipe)
                            <a class="media media-single" href="#">
                                <i data-feather="edit"></i>
                                <span class="title text-mute">{{ $tipe->jenis_ujian }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="card">
                <div class="card-header">
                    <div class="text-xl font-medium mb-0">Daftar Ujian</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table" style="width:100%">
                            <thead>
                            <tr class="border-b">
                                <th>#</th>
                                <th class="text-start">Tanggal</th>
                                <th class="text-start">Tipe Ujian</th>
                                <th>Jam</th>
                                <th class="text-start">Lokasi</th>
                                <th>Kuota</th>
                                <th>Jumlah</th>
                            </tr>
                            </thead>
                            <tbody class="text-fade">
                            <tr class="border-b">
                                <td class="text-center">#</td>
                                <td>Tanggal 1</td>
                                <td>Tipe Ujian 1</td>
                                <td class="text-center">Jam 1</td>
                                <td>Lokasi 1</td>
                                <td class="text-center">Kuota 1</td>
                                <td class="text-center">Jumlah 1</td>
                            </tr>
                            <tr class="border-b">
                                <td class="text-center">#</td>
                                <td>Tanggal 2</td>
                                <td>Tipe Ujian 2</td>
                                <td class="text-center">Jam 2</td>
                                <td>Lokasi 2</td>
                                <td class="text-center">Kuota 2</td>
                                <td class="text-center">Jumlah 2</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
        </div>
    </div>
</x-app-layout>
