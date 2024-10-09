@section('title', $title)
<x-app-layout>
    <h4 class="page-title text-2xl font-medium">Profil</h4>
    <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-4">
        <div class="lg:order-1">
            <div class="card text-center">
                <div class="card-body">
                    @if(Auth::guard('user')->check())
                        <img src="{{ asset('storage/' . $users->pasFoto) }}" class="bg-light w-100 h-100 rounded-full mx-auto avatar-lg img-thumbnail object-cover" alt="profile-image">
                    @elseif(Auth::guard('admin')->check())
                        <img src="{{ asset('storage/' . $users->pasFoto) }}" class="bg-light w-100 h-100 rounded-full mx-auto avatar-lg img-thumbnail object-cover object-top" alt="profile-image">
                    @endif


                    <h4 class="mb-0 mt-2 text-2xl font-medium">{{ $users->nama }}</h4>
                    <p class="text-muted text-base my-10">{{ $users->no_Peserta }}</p>

                    <div class="text-start mt-3">
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Telepon</strong><span class="ms-2">{{ $users->num_telp }}</span></p>
                        <p class="text-muted mb-2 flex justify-between"><strong class="text-info">Email</strong> <span class="ms-2 ">{{ $email->email }}</span></p>
                        <p class="text-muted mb-1 flex justify-between"><strong class="text-info">Kewarganegaraan</strong> <span class="ms-2">{{ $users->kewarganegaraan }}</span></p>
                    </div>
                </div>
            </div>
            @if(Auth::guard('user')->check())
                <a href="{{ route('edit-profile-user') }}" type="button" class="waves-effect waves-light w-p100 rounded-xl btn btn-primary text-center">Edit Profile</a>
            @elseif(Auth::guard('admin')->check())
                <a href="{{ route('edit-profile-admin') }}" type="button" class="waves-effect waves-light w-p100 rounded-xl btn btn-primary text-center">Edit Profile</a>
            @endif
        </div>
        <div class="col-span-2">
            <div class="box">
                <div class="box-body p-0">
                    <div class="media-list media-list-hover media-list-divided">
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tempat Lahir</span>
                            <span>{{ $users->tmpt_lahir }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tanggal Lahir</span>
                            <span>{{$users->tgl_lahir}}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Jenis Kelamin</span>
                            <span>
                                @if($users->jenis_kelamin == 'L')
                                    Laki-laki
                                @else
                                    Perempuan
                                @endif
                            </span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Alamat</span>
                            <span>{{ $users->alamat }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Pekerjaan</span>
                            <span>{{ $users->pekerjaan }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">NIDN</span>
                            <span>{{ $users->NIDN }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Instansi</span>
                            <span>{{ $users->instansi }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Pendidikan</span>
                            <span>{{ $users->Pendidikan }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Tahun Pendidikan Pendidikan</span>
                            <span>{{ $users->thn_lulus }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">Bahasa</span>
                            <span>{{ $users->bhs_seharian }}</span>
                        </a>
                        <a class="media media-single" href="#">
                            <span class="title text-mute">KTP</span>
                            <span>
                                <img src="{{ asset('storage/' . $users->ktp) }}" alt="" width="300" height="200" class="rounded-xl">
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
