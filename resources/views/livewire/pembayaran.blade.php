@section('title', $title)
<x-app-layout>
    @if (session()->has('message'))
        <div class="w-full bg-green-600 p-2 rounded text-white">
            {{ session('message') }}
        </div>
    @endif
    <h4 class="page-title text-2xl font-medium">Pembayaran</h4>
    <div class="grid grid-cols-1 gap-4 mt-6">
        <div>
            <div class="box">
                <div class="box-body">
                    <p class="mb-4">Untuk melanjutkan proses pendaftaran ujian, Anda diwajibkan untuk melakukan pembayaran Ujian. Pembayaran dapat dilakukan melalui BNI Virtual Account.</p>
                    <div class="flex justify-between items-center mt-3">
                        <h2 class="box-title text-xl m-0 font-bold">Nomor Virtual Account : xxxxxxxxxxxxxxxx</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">History Pembayaran</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($Data->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]) as $psn => $data)
                                @if(isset($data->listujian->id_jenis_ujian))
                                    <tr class="border-y">
                                        <td class="p-2">{{ $data->listujian->tipeujian->jenis_ujian }}</td>
                                        <td class="p-2">{{ $tgl[$psn] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $jm[$psn] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $data->listruangan->nama_ruangan }}</td>
                                        <td class="p-2">{{ $created[$psn] ?? 'N/A' }}</td>
                                        <td class="p-2">
                                            @if(!$data->status)
                                                <button class="bg-primary text-white py-2 px-4 rounded"
                                                        wire:click="Cek({{ $data }})"
                                                        wire:confirm="Apakah Anda sudah melakukan Pembayaran?">Bayar</button>
                                            @else
                                                Berhasil
                                            @endif
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="p-5 h-full">--}}
{{--        <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">--}}
{{--            <!-- Payment Status -->--}}
{{--            <div>--}}
{{--                <h3 class="text-xl mb-2">Jadwal Anda</h3>--}}
{{--                <table class="w-full rounded">--}}
{{--                    <tr class="bg-primary text-white text-left">--}}
{{--                        <th class="p-2">Jenis Ujian</th>--}}
{{--                        <th class="p-2">Tanggal Ujian</th>--}}
{{--                        <th class="p-2">Jam</th>--}}
{{--                        <th class="p-2">Lokasi</th>--}}
{{--                        <th class="p-2">Waktu Pesan</th>--}}
{{--                        <th class="p-2"></th>--}}
{{--                    </tr>--}}

{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
