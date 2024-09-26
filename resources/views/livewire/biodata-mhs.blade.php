@section('title', $title)
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
                                {{$data['temp_lahir']}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tanggal Lahir</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                {{$data['tgl_lahir']}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Jenis Kelamin</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                @if($data['sex'] == 'L')
                                    Laki-laki
                                    @else
                                    Perempuan
                                @endif
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Alamat</span>
                                <span class="w-1/2 md:w-fit flex items-center gap-5 text-right md:text-left text-wrap">
                                <span class="hidden md:block">:</span>
                                {{$alamat}}
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pekerjaan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Mahasiswa
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">NIDN</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Instansi</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Universitas Advent Indonesia
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                S1
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Tahun Pendidikan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                2024
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Kewarganegaraan</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Indonesia
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">Bahasa</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                Indonesia
                            </span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center py-3">
                            <p class="w-full flex items-center gap-10 text-nowrap justify-between md:justify-normal">
                                <span class="w-1/2 md:w-1/5 font-semibold">KTP</span>
                                <span class="w-1/2 flex items-center gap-5 justify-end md:justify-normal">
                                <span class="hidden md:block">:</span>
                                <img src="https://picsum.photos/300/200" alt="" class="rounded-xl">
                            </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full order-1 xl:order-2 xl:w-1/3">
                    <div class="bg-white drop-shadow-lg h-fit mt-1 rounded p-5">
                        <div class="flex items-center flex-col gap-4 mb-5">
                            <img src="{{'https://online.unai.edu/mhs/'.$foto}}" alt="" width="200" height="300" class="rounded-xl">
                            <div class="text-center">
                                <h1 class="text-xl font-bold">{{$data['nama']}}</h1>
                                <p class="text-center">{{$data['nim']}}</p>
                            </div>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Telepon</span>
                                <span>{{$data['notelp']}}</span>
                            </p>
                        </div>
                        <div class="min-h-11 max-h-fit flex items-center w-full">
                            <p class="w-full flex items-center justify-between text-nowrap">
                                <span class="font-semibold">Email</span>
                                <span class="text-wrap">{{$data['email']}}</span>
                            </p>
                        </div>
                    </div>
                </div>
             </div>
        </div>
    </x-app-layout>
</div>
