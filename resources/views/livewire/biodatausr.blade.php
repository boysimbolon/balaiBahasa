<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <x-heading-page>Profil</x-heading-page>
            <div class="flex flex-col xl:flex-row gap-5">
                <div class="bg-white drop-shadow-lg w-full order-2 xl:order-1 xl:w-2/3 mt-1 rounded p-5 flex flex-col gap-4">
                    <div class="divide-y-2">
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tempat Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->tmpt_lahir}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tanggal Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->tgl_lahir}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Jenis Kelamin</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->jenis_kelamin}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Alamat</span>
                                <span class="w-1/2 md:w-fit flex items-center gap-5 text-right md:text-left text-wrap">
                                <span class="hidden md:block">:</span>
                                {{$users->alamat}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pekerjaan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->pekerjaan}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">NIDN</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->NIDN}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Instansi</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->instansi}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->Pendidikan}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tahun Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->thn_lulus}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Kewarganegaraan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->kewarganegaraan}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Bahasa</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$users->bhs_seharian}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center py-3">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">KTP</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <img src="{{ asset('storage/' . $users->ktp) }}" alt="" class="rounded-xl">
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full order-1 xl:order-2 xl:w-1/3">
                    <div class="bg-white drop-shadow-lg h-fit mt-1 rounded p-5">
                        <div class="flex items-center flex-col gap-4 mb-5">
                            <img src="{{ asset('storage/' . $users->pasFoto) }}" alt="" class="rounded-xl">
                            <div class="text-center">
                                <h1 class="text-xl font-bold">{{$users->nama}}</h1>
                                <p class="text-center">{{$users->no_Peserta}}</p>
                            </div>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Telepon</span>
                                <span>{{$users->num_telp}}</span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center w-full">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Email</span>
                                <span class="text-wrap">{{$email->email}}</span>
                            </p>
                        </div>
                    </div>
                    <a class="text-center mt-5 bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md hidden xl:block" href="{{ route('edit-profile-user') }}">Edit Profile</a>
                </div>
                <a class="text-center bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md order-3 xl:hidden" href="{{ route('edit-profile-user') }}">Edit Profile</a>
            </div>
        </div>
    </x-app-layout>
</div>
