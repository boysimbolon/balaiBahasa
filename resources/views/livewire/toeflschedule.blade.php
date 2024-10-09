@section('title', $title)
<x-app-layout>
    @if (session()->has('message'))
        <div class="w-full bg-green-600 p-2 rounded text-white">
            {{ session('message') }}
        </div>
    @endif
    <h4 class="page-title text-2xl font-medium">TOEFL (Test of English as a Foreign Language)</h4>
    <div class="grid grid-rows-3 gap-x-4 mt-6">
        <div class="">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal Anda</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                                <th>Moodle</th>
                            </tr>
                            </thead>
                            <tbody>
{{--                            @foreach($pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]) as $psn => $data)--}}
{{--                                @if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian == '3' && $data->status=='1')--}}
{{--                                    <tr class="border-y">--}}
{{--                                        <td class="p-2">{{ $data->listujian->tipeujian->jenis_ujian }}</td>--}}
{{--                                        <td class="p-2">{{ $tgl[$psn] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">{{ $jm[$psn] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">{{ $data->listruangan->nama_ruangan }}</td>--}}
{{--                                        <td class="p-2">{{ $created[$psn] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">--}}
{{--                                            <div class="p-1 gap-3 flex">--}}
{{--                                                <a href="" target="_blank" class="text-primary">Link Moodle</a>--}}
{{--                                                <span>Enroll Key: u4JKid</span>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
                            @if($pesan->isEmpty())
                                <tr class="border-y">
                                    <td class="p-2 text-center" colspan="6">Belum ada jadwal</td>
                                </tr>
                            @else
                                @foreach($pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]) as $psn => $data)
                                    @if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian == '3' && $data->status=='1')
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
        <div class="">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">Jadwal TOEFL</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
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
{{--                            @foreach($tanggal->sort() as $index => $tgl)--}}
{{--                                @if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '3')--}}
{{--                                    <tr class="border-y">--}}
{{--                                        <td class="p-2">{{ $tgl }}</td>--}}
{{--                                        <td class="p-2">{{ $jam[$index] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">{{ $kapasitas[$index] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">{{ $kuota[$index] ?? 'N/A' }}</td>--}}
{{--                                        <td class="p-2">--}}
{{--                                            @php--}}
{{--                                                $statusPesan = $pesan->firstWhere('id_ujian', $jenis[$index]->id);--}}
{{--                                            @endphp--}}
{{--                                            @if($kuota[$index] == 0)--}}
{{--                                                Penuh--}}
{{--                                            @elseif($kuota[$index] > 0 && !$statusPesan)--}}
{{--                                                <button class="bg-primary text-white py-2 px-4 rounded" wire:click="Pesan({{ $jenis[$index] }}, {{ $kapasitas[$index] }})" wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>--}}
{{--                                            @else--}}
{{--                                                @if($statusPesan)--}}
{{--                                                    @if($statusPesan->status == "1")--}}
{{--                                                        Done--}}
{{--                                                    @else--}}
{{--                                                        Bayar--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}
{{--                                            @endif--}}
{{--                                        </td>--}}

{{--                                    </tr>--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
                            @foreach($tanggal->sort() as $index => $tgl)
                                @if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '3')
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
                                                <button class="bg-primary text-white py-2 px-4 rounded"
                                                        wire:click="pesan({{ $jenis[$index]->id }}, {{ $kapasitas[$index] }})"
                                                        wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
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
