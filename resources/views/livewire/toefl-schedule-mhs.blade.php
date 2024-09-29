@section('title', $title)
<div>
    <x-app-layout>
        @if (session()->has('message'))
            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('message') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Exit</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @elseif(session()->has('error'))
            <div id="alert-border-2" class="flex items-center p-4 mb-4 text-red-800 border-t-4 border-red-300 bg-red-50 dark:text-red-400 dark:bg-gray-800 dark:border-red-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                </svg>
                <div class="ms-3 text-sm font-medium">
                    {{ session('error') }}
                </div>
                <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700"  data-dismiss-target="#alert-border-2" aria-label="Close">
                    <span class="sr-only">Exit</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif
        <div class="p-5 h-full">
            <x-heading-page>TOEFL (Test of English as a Foreign Language)</x-heading-page>
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
                            <th class="p-2">See Moodle</th>
                        </tr>
                        @foreach($pesan->sortBy([['listujian.tipeujian.jenis_ujian', 'asc'], ['listujian.tanggal', 'asc'],['listujian.jam','asc']]) as $psn => $data)
                            @if(isset($data->listujian->id_jenis_ujian) && $data->listujian->id_jenis_ujian == '3' && $data->status=='1')
                                <tr class="border-y">
                                    <td class="p-2">{{ $data->listujian->tipeujian->jenis_ujian }}</td>
                                    <td class="p-2">{{ $tgl[$psn] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $jm[$psn] ?? 'N/A' }}</td>
                                    <td class="p-2">{{ $data->listruangan->nama_ruangan }}</td>
                                    <td class="p-2">{{ $created[$psn] ?? 'N/A' }}</td>
                                    <td class="p-2">
                                        <div class="p-1 gap-3 flex">
                                        <a href="" target="_blank" class="text-primary">Link Moodle</a>
                                            <span>Enroll Key: u4JKid</span>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

                <!-- Entrance Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal TOEFL</h3>
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
                                                    wire:click="Pesan({{ $jenis[$index] }}, {{ $kapasitas[$index] }})"
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

            </div>
        </div>
    </x-app-layout>
</div>
