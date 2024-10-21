@section('title', $title)
{{--@dd($ruangan)--}}
<x-app-layout>
    @if (session()->has('message'))
        <div class="mb-5">
            <div class="box">
                <div class="box-body alert alert-success">
                    <div>{{ session('message') }}</div>
                </div>
            </div>
        </div>
    @endif


    <!-- Content Header -->
    <div class="flex items-center justify-between">
        <h4 class="page-title text-2xl font-medium mb-0">List Ruangan</h4>
        <a href="{{ route('CreateRuangan') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-base px-4 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            <i class="fa-solid fa-plus"></i> <span class="hidden md:inline">Create Ruangan</span>
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
                            <th>Nama Ruangan</th>
                            <th>Lokasi</th>
                            <th class="text-center">Kapasitas</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ruangan_ujians as $ruangan)
                            <tr>
                                <td>{{ $ruangan->nama_ruangan }}</td>
                                <td>{{ $ruangan->alamat }}</td>
                                <td class="text-center">{{ $ruangan->kapasitas }}</td>
                                <td class="flex justify-center">
                                    <a href="#" wire:click.prevent="editRuangan({{ $ruangan->id }})" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-4 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                        <i class="fa-solid fa-edit"></i>
                                    </a>
                                    <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base px-4 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 model_img" wire:click="deleteRuangan({{ $ruangan->id }})" id="sa-warning">
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
