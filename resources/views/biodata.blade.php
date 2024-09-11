<x-app-layout>
    <div class="p-5 h-full">
        <x-heading-page>Profil</x-heading-page>
        <div class="flex flex-col xl:flex-row gap-5">
            <div class="bg-white drop-shadow-lg w-full order-2 xl:order-1 xl:w-2/3 mt-1 rounded p-5 flex flex-col gap-4">
                <div class="divide-y-2">
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Tempat Lahir</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Bandung</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Tanggal Lahir</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>1971-12-28</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Jenis Kelamin</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Laki-Laki</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Alamat</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Jl. Diponegoro No. 123, Bandung</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Pekerjaan</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Mahasiswa</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">NIDN</span>
                            <span class="flex items-center gap-5">
                            :
                            <span></span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Instansi</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Universitas Padjadjaran</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Pendidikan</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>S1</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Tahun Pendidikan</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>2024</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Kewarganegaraan</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Indonesia</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 font-semibold">Bahasa</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>Indonesia</span>
                        </span>
                        </p>
                    </div>
                    <div class="h-fit flex items-center py-3">
                        <p class="w-full flex items-center gap-10 text-nowrap">
                            <span class="w-1/5 h-fit font-semibold">KTP</span>
                            <span class="flex items-center gap-5">
                            :
                            <span>
                                <img src="https://picsum.photos/300/200" alt="" class="rounded-xl">
                            </span>
                        </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="w-full order-1 xl:order-2 xl:w-1/3">
                <div class="bg-white drop-shadow-lg h-fit mt-1 rounded p-5">
                    <div class="flex items-center flex-col gap-4 mb-5">
                        <img src="https://picsum.photos/200/300" alt="" class="rounded-xl">
                        <div class="text-center">
                            <h1 class="text-xl font-bold">John Doe</h1>
                            <p class="text-center">(0123456789)</p>
                        </div>

                    </div>
                    <div class="h-11 flex items-center">
                        <p class="w-full flex items-center justify-between text-nowrap">
                            <span class="font-semibold">Telepon</span>
                            <span>08123456789</span>
                            </span>
                        </p>
                    </div>
                    <div class="h-11 flex items-center w-full">
                        <p class="w-full flex items-center justify-between text-nowrap">
                            <span class="font-semibold">Email</span>
                            <span class="text-wrap">johndoe@example.com</span>
                        </p>
                    </div>
                </div>
                <a class="text-center mt-5 bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md hidden xl:block" href="{{ route('edit_profile') }}">Edit Profile</a>
            </div>
            <a class="text-center bg-primary hover:bg-sky-500 hover:font-semibold w-full p-2 rounded text-white gap-1 drop-shadow-md order-3 xl:hidden" href="{{ route('edit_profile') }}">Edit Profile</a>
        </div>
    </div>
</x-app-layout>
