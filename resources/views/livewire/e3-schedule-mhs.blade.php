@section('title', $title)
<x-app-layout>
    @if (session()->has('message'))
        <div class="w-full bg-green-600 p-2 rounded text-white">
            {{ session('message') }}
        </div>
    @endif
    <h4 class="page-title text-2xl font-medium">E3 (English Entrance/Exit Exam)</h4>
    <div class="flex flex-col gap-x-4 mt-6">
        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal Anda</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($pesan->isEmpty())
                                <tr class="border-y">
                                    <td class="p-2" colspan="5">Belum ada jadwal</td>
                                </tr>
                            @else
                                @foreach($pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'], ['listujian.jam', 'asc']]) as $psn => $data)
                                    @if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian != '3' && $data->status == '1')
                                        <tr class="border-y">
                                            <td class="p-2">{{ $data->listujian->tipeujian->jenis_ujian }}</td>
                                            <td class="p-2">{{ $tgl[$psn] ?? 'N/A' }}</td>
                                            <td class="p-2">{{ $jm[$psn] ?? 'N/A' }}</td>
                                            <td class="p-2">{{ $data->listruangan->nama_ruangan }}</td>
                                            <td class="p-2">{{ $created[$psn] ?? 'N/A' }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal English Entrance Exam</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Kapasitas</th>
                                <th>Sisa Kuota</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tanggal->sort() as $index => $tgl)
                                @if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '1')
                                    <tr class="border-y">
                                        <td class="p-2">{{ $tgl }}</td>
                                        <td class="p-2">{{ $jam[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $kapasitas[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $kuota[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">
                                            @php
                                                $statusPesan = $pesan->firstWhere('id_ujian', $jenis[$index]->id);
                                            @endphp
                                            @if($kuota[$index] == 0)
                                                Penuh
                                            @elseif($kuota[$index] > 0 && !$statusPesan)
                                                <button class="bg-primary text-white py-2 px-4 rounded" wire:click="Pesan({{ $jenis[$index] }}, {{ $kapasitas[$index] }})" wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
                                            @else
                                                @if($statusPesan)
                                                    @if($statusPesan->status == "1")
                                                        Done
                                                    @else
                                                        Bayar
                                                    @endif
                                                @endif
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

        <div>
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal English Exit Exam</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Kapasitas</th>
                                <th>Sisa Kuota</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tanggal->sort() as $index => $tgl)
                                @if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '2')
                                    <tr class="border-y">
                                        <td class="p-2">{{ $tgl }}</td>
                                        <td class="p-2">{{ $jam[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $kapasitas[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">{{ $kuota[$index] ?? 'N/A' }}</td>
                                        <td class="p-2">
                                            @php
                                                $statusPesan = $pesan->firstWhere('id_ujian', $jenis[$index]->id);
                                            @endphp
                                            @if($kuota[$index] == 0)
                                                Penuh
                                            @elseif($kuota[$index] > 0 && !$statusPesan)
                                                <button class="bg-primary text-white py-2 px-4 rounded" wire:click="Pesan({{ $jenis[$index] }}, {{ $kapasitas[$index] }})" wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
                                            @else
                                                @if($statusPesan)
                                                    @if($statusPesan->status == "1")
                                                        Done
                                                    @else
                                                        Bayar
                                                    @endif
                                                @endif
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
</x-app-layout>
