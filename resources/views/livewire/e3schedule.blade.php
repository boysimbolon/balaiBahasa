<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <x-heading-page>E3 (English Entrance/Exit Exam)</x-heading-page>
{{--            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">--}}
            <div class="bg-white max-w-full drop-shadow-lg mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full shadow-xl">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Jenis Ujian</th>
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="p-3 whitespace-nowrap">Waktu Pilih</th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">English Entrance Exam</td>
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">08:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">Minggu, 11 Agustus 2024</td>
                            </tr>
                            <tr>
                                <td class="p-3 whitespace-nowrap">English Exit Exam</td>
                                <td class="p-3 whitespace-nowrap">Rabu, 11 Desember 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab Komputer 1</td>
                                <td class="p-3 whitespace-nowrap">Minggu, 8 Desember 2024</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Entrance Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Entrance Exam</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full rounded">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Kuota</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jumlah</th>
                                <th class="p-3"></th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3">
                                    Penuh
                                </td>
                            </tr>
                            <tr class="">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">13:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">20</td>
                                <td class="p-3">
                                    <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Exit Exam Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal English Exit Exam</h3>
                    <div class="overflow-auto rounded">
                        <table class="w-full rounded">
                            <tr class="bg-primary text-white text-left">
                                <th class="p-3 whitespace-nowrap">Tanggal</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jam</th>
                                <th class="min-w-32 p-3 whitespace-nowrap">Lokasi</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Kuota</th>
                                <th class="min-w-20 p-3 whitespace-nowrap">Jumlah</th>
                                <th class="p-3"></th>
                            </tr>
                            <tr class="border-y">
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">10:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3">
                                    Penuh
                                </td>
                            </tr>
                            <tr>
                                <td class="p-3 whitespace-nowrap">Rabu, 14 Agustus 2024</td>
                                <td class="p-3 whitespace-nowrap">13:00</td>
                                <td class="p-3 whitespace-nowrap">Lab CBT</td>
                                <td class="p-3 whitespace-nowrap">50</td>
                                <td class="p-3 whitespace-nowrap">20</td>
                                <td class="p-3">
                                    <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
