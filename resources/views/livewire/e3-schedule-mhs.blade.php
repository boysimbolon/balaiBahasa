@section('title', $title)
<div>
    <x-app-layout>
        @if (session()->has('message'))
            <div class="w-full bg-green-600 p-2 rounded text-white">
                {{ session('message') }}
            </div>
        @endif
        <div class="p-5 h-full">
            <x-heading-page>E3 (English Entrance/Exit Exam)</x-heading-page>
            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Jenis Ujian</th>
                            <th class="p-2">Tanggal Ujian</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Waktu Pesan</th>
                        </tr>
                        @foreach($pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]) as $psn => $data)
                            @if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian != '3' && $data->status=='1')
                                <tr class="border-y">
                                    <td class="p-2">{{ $data->listujian->tipeujian->jenis_ujian }}</td>
                                    <td class="p-2">{{ $tgl[$psn] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $jm[$psn] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $data->listruangan->nama_ruangan }}</td>
                                    <td class="p-2">{{ $created[$psn] ?? 'N/A' }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

                <!-- Entrance Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Entrance Exam</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Tanggal</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Kapasitas</th>
                            <th class="p-2">Sisa Kuota</th>
                            <th class="p-2"></th>
                        </tr>
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
                    </table>

                </div>

                <!-- Exit Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Exit Exam</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Tanggal</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Kapasitas</th>
                            <th class="p-2">Sisa Kuota</th>
                            <th class="p-2"></th>
                        </tr>
                        @foreach($tanggal->sort() as $index => $tgl)
                            @if(isset($jenis[$index]) && $jenis[$index]->id_jenis_ujian == '2')
                                <tr class="border-y">
                                    <td class="p-2">{{ $tgl }}</td>
                                    <td class="p-2">{{ $jam[$index] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $kapasitas[$index] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $kuota[$index] ?? 'N/A' }}</td>
                                    <td class="p-2">
                                        @if($kuota[$index] == 0)
                                            Penuh
                                        @elseif($kuota[$index] > 0 && !$pesan->contains('id_ujian', $jenis[$index]->id))
                                            <button class="bg-primary text-white py-2 px-4 rounded"
                                                    wire:click="pesan({{ $jenis[$index]->id }}, {{ $kapasitas[$index] }})"
                                                    wire:confirm="Apakah Anda yakin ingin memilih jadwal ini?">Pilih</button>
                                        @else
                                            @php
                                                $statusPesan = $pesan->firstWhere('id_ujian', $jenis[$index]->id);
                                            @endphp

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
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
