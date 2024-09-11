<x-app-layout>
    <div class="p-5 h-full">
        <h2 class="text-xl">Edit Profil</h2>
        <div class="bg-white drop-shadow-lg w-3/4 mt-1 rounded p-5 flex flex-col gap-4">
            <div class="flex flex-col gap-10">
                <!-- Nama -->
                <div class="h-11 flex items-center">
                    <div class="w-full">
                        <label for="name">Nama</label>
                        <input wire:model="nama" id="nama" class="block mt-1 w-1/2 rounded" placeholder="Nama" type="text" name="nama" required autofocus autocomplete="nama"/>
                        <x-input-error :messages="$errors->get('nama')" class="mt-2"/>
                    </div>
                </div>
                <div class="h-11 flex items-center gap-5">
                    <!-- Tempat Lahir -->
                    <div class="w-1/2">
                        <x-input-label for="tmpt_lahir" :value="__('Tempat Lahir')"/>
                        <input wire:model="tmpt_lahir" id="tmpt_lahir" class="block mt-1 w-full rounded" placeholder="Tempat Lahir" type="text" name="tmpt_lahir" required autofocus autocomplete="tmpt_lahir"/>
                        <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2"/>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="w-1/2">
                        <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')"/>
                        <input wire:model="tgl_lahir" id="tgl_lahir" class="block mt-1 w-full rounded" type="date" name="tgl_lahir"  required autofocus autocomplete="tgl_lahir"/>
                        <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2"/>
                    </div>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Tempat Lahir</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Bandung</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Tanggal Lahir</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>1971-12-28</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Jenis Kelamin</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Laki-Laki</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Alamat</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Jl. Diponegoro No. 123, Bandung</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Pekerjaan</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Mahasiswa</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">NIDN</span>
                        <span class="flex items-center gap-5">
                            :
                            <span></span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Instansi</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Universitas Padjadjaran</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Telepon</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>08123456789</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Email</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>johndoe@example.com</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Pendidikan</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>S1</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Tahun Pendidikan</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>2024</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Kewarganegaraan</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Indonesia</span>
                        </span>
                    </p>
                </div>
                <div class="h-11 flex items-center">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5">Bahasa</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>Indonesia</span>
                        </span>
                    </p>
                </div>
                <div class="h-fit flex items-center py-3">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5 h-fit">Foto</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>
                                <img src="https://picsum.photos/200/300" alt="" class="rounded-xl">
                            </span>
                        </span>
                    </p>
                </div>
                <div class="h-fit flex items-center py-3">
                    <p class="w-full flex items-center gap-10">
                        <span class="w-1/5 h-fit">KTP</span>
                        <span class="flex items-center gap-5">
                            :
                            <span>
                                <img src="https://picsum.photos/300/200" alt="" class="rounded-xl">
                            </span>
                        </span>
                    </p>
                </div>
            </div>
            <button class="flex justify-start mt-5 bg-primary w-fit p-2 rounded text-white gap-1" wire:click="{{ route('edit_profile') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
                Edit
            </button>
        </div>
    </div>
</x-app-layout>
