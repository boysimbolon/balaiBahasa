@section('title', $title)
<x-app-layout>
    <!-- Content Header -->
    <div class="flex items-center justify-between">
        <h4 class="page-title text-2xl font-medium mb-0">Form Tambah Ujian</h4>
        <a href="{{ route('ListUjian') }}" class="waves-effect waves-light btn btn-light">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>
    </div>

    <!-- Main Content -->
    <div class="grid grid-cols-1 gap-4 mt-6">
        <div>
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="Save">
                        @csrf

                        <div class="grid gap-5">
                            <!-- Jenis Ujian -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="id_jenis_ujian" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis Ujian</label>
                                    <select wire:model="id_jenis_ujian" id="id_jenis_ujian" name="id_jenis_ujian" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="">Pilih Jenis Ujian</option>
                                        @foreach($JenisUjian as $option)
                                            <option value="{{ $option->id }}">{{ $option->jenis_ujian }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_jenis_ujian')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Ruangan -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="id_ruangan" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Ruang</label>
                                    <select wire:model="id_ruangan" id="id_ruangan" name="id_ruangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="">Pilih Ruangan</option>
                                        @foreach($ruangan as $option)
                                            <option value="{{ $option->id }}">{{ $option->nama_ruangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('id_ruangan')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="tanggal" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal</label>
                                    <input type="date" wire:model="tanggal" name="tanggal" id="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                </div>
                                @error('tanggal')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Jam -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="jam" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Jam</label>
                                    <input type="time" wire:model="jam" name="jam" id="jam" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                </div>
                                @error('jam')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- No Modul -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="no_modul" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor Modul</label>
                                    <input type="text" wire:model="no_modul" name="no_modul" id="no_modul" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                </div>
                                @error('no_modul')
                                    <span class="text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                            <!-- Change Password Button -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <div class="hidden md:block w-full md:w-1/2"></div>
                                    <button type="submit" class="waves-effect waves-light w-full md:w-1/2 md:hidden rounded-xl btn btn-primary text-center">Create Jadwal Ujian</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
