@section('title', $title)
<div>
    <x-app-layout>
        @if (session()->has('message'))
            <div class="w-full bg-green-600 p-2 rounded text-white">
                {{ session('message') }}
            </div>
        @endif
        <div class="p-5 h-full">
            <x-heading-page>Pembayaran</x-heading-page>
            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Payment Status -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Jenis Ujian</th>
                            <th class="p-2">Tanggal Ujian</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Waktu Pesan</th>
                            <th class="p-2"></th>
                        </tr>
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
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
