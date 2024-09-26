@section('title', $title)
<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <x-heading-page>E3 (English Entrance/Exit Exam)</x-heading-page>
            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Jenis Ujian</th>
                            <th class="p-2">Tanggal UJian</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Waktu Pesan</th>
                        </tr>
                        @foreach($pesan as $psn =>$data)
                            @if($data->listujian->id_jenis_ujian != '3')
                                <tr class="border-y">
                                    <td class="p-2">{{$data->listujian->tipeujian->jenis_ujian}}</td>
                                    <td class="p-2">{{$tgl[$psn]}}</td>
                                    <td class="p-2">{{$jm[$psn]}}</td>
                                    <td class="p-2">{{$data->listruangan->nama_ruangan}}</td>
                                    <td class="p-2">{{$created[$psn]}}</td>
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
                            <th class="p-2">Kuota</th>
                            <th class="p-2">Jumlah</th>
                            <th class="p-2"></th>
                        </tr>
                        @foreach($tanggal as $index => $tgl)
                            @if($kapasitas[$index]->id_jenis_ujian == 1)
                            <tr class="border-y">
                                <td class="p-2">{{ $tgl }}</td>
                                <td class="p-2">{{ $jam[$index] }}</td>
                                <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan }}</td>
                                <td class="p-2">{{ $kapasitas[$index]->listruangan->kapasitas }}</td>
                                <td class="p-2">{{ $kuota }}</td>
                                <td class="p-2">
                                    @if($kapasitas[$index]->listruangan->kapasitas <= $kuota)
                                    Penuh
                                    @else
                                    <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
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
                            <th class="p-2">Kuota</th>
                            <th class="p-2">Jumlah</th>
                            <th class="p-2"></th>
                        </tr>
                        @foreach($tanggal as $index => $tgl)
                            @if($kapasitas[$index]->id_jenis_ujian == 2)
                                <tr class="border-y">
                                    <td class="p-2">{{ $tgl }}</td>
                                    <td class="p-2">{{ $jam[$index] }}</td>
                                    <td class="p-2">{{ $ruangan[$index]->listruangan->nama_ruangan }}</td>
                                    <td class="p-2">{{ $kapasitas[$index]->listruangan->kapasitas }}</td>
                                    <td class="p-2">{{ $kuota }}</td>
                                    <td class="p-2">
                                        @if($kapasitas[$index]->listruangan->kapasitas <= $kuota)
                                            Penuh
                                        @else
                                            <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
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
