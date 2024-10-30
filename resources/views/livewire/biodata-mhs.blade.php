@section('title', $title)
<x-app-layout>
    <h4 class="page-title text-2xl font-medium">Profil</h4>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
        <div class="lg:order-1">
            <div class="card text-center">
                <div class="card-body">
                    <img src="{{ 'https://online.unai.edu/mhs/'.$foto }}" class="bg-light w-100 h-100 rounded-full mx-auto avatar-lg img-thumbnail" alt="profile-image">

                    <h4 class="mb-0 mt-2 text-2xl font-medium">{{ $data['nama'] }}</h4>
                    <p class="text-muted text-base my-10">({{ trim($data['nim']) }})</p>

                    <div class="text-start mt-3">
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Telepon</strong><span class="ms-2">{{ $data['notelp'] }}</span></p>
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Email</strong> <span class="ms-2 ">{{ $data['email'] }}</span></p>
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
                            <span>{{ $data['temp_lahir'] }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tanggal Lahir</span>
                            <span>{{ $data['tgl_lahir'] }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Jenis Kelamin</span>
                            <span>
                                @if($data['sex'] == 'L')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Alamat</span>
                            <span>{{ $alamat }}</span>
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
                            <span class="title text-mute">Tahun Pendidikan</span>
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
</x-app-layout>
