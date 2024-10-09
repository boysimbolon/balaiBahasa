@section('title', $title)
<x-app-layout>
    <!-- Content Header -->
    <div class="flex items-center justify-between">
        <h4 class="page-title text-2xl font-medium mb-0">Form Tambah Ruangan</h4>
        <a href="{{ route('ListRuangan') }}" class="waves-effect waves-light btn btn-light">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- Main Content -->
    <div class="grid grid-cols-1 gap-4 mt-6">
        <div>
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="save">
                        @csrf

                        <div class="grid gap-5">
                            <!-- Nama Ruangan -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="nama_ruangan" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Nama Ruangan</label>
                                    <input type="text" wire:model="nama_ruangan" name="nama_ruangan" id="nama_ruangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama Ruangan" required autofocus>
                                </div>
                                @error('nama_ruangan')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Lokasi -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between">
                                    <label for="alamat" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Lokasi</label>
                                    <textarea id="alamat" wire:model="alamat" rows="4" class="block p-2.5 w-full text-base text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Lokasi ruang ujian"></textarea>
                                </div>
                                @error('alamat')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Kapasitas -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="kapasitas" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Kapasitas</label>
                                    <input type="number" wire:model="kapasitas" name="kapasitas" id="kapasitas" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kapasitas Ruangan" required autofocus>
                                </div>
                                @error('kapasitas')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Change Password Button -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <div class="hidden md:block w-full md:w-1/2"></div>
                                    <button type="submit" class="waves-effect waves-light w-full md:w-1/2 md:hidden rounded-xl btn btn-primary text-center">Create Ruangan</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
