@section('title', $title)
<x-app-layout>
    <!-- Content Header -->
    <div class="flex items-center justify-between">
        <h4 class="page-title text-2xl font-medium mb-0">List Jadwal Ujian</h4>
        <a href="{{ route('CreateUjian') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <i class="fa-solid fa-plus"></i> <span class="hidden md:inline">Create Jadwal Ujian</span>
        </a>
    </div>

    <!-- Main Content -->
    <div class="mt-6">
        <div class="box">
            <div class="box-body">
                <div class="table-responsive">
                    <table class="text-fade table w-full">
                        <thead class="bg-primary text-left">
                        <tr>
                            <th>Jenis Ujian</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th>Kapasitas</th>
                            <th>Modul</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($all_ujian_data as $data)
                            <tr>
                                <td>{{ $data->jenis_ujian }}</td>
                                <td>{{ $data->tanggal }}</td>
                                <td>{{ $data->jam }}</td>
                                <td>{{ $data->nama_ruangan }}</td>
                                <td>{{ $data->kapasitas }}</td>
                                <td>{{ $data->no_modul }}</td>
                                <td class="flex justify-center">
                                    <a href="#" wire:click.prevent="editUjian({{ $data->id_ujian }})" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-4 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-4 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
