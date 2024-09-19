<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <x-heading-page>TOEFL</x-heading-page>
            <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
                <!-- Your Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal Anda</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Jenis Ujian</th>
                            <th class="p-2">Tanggal</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Waktu Pilih</th>
                        </tr>
                        <tr class="border-y">
                            <td class="p-2">TOEFL</td>
                            <td class="p-2">Kamis, 15 Agustus 2024</td>
                            <td class="p-2">08:00</td>
                            <td class="p-2">Lab CBT</td>
                            <td class="p-2">Minggu, 11 Agustus 2024</td>
                        </tr>
                    </table>
                </div>

                <!-- TOEFL Schedule -->
                <div>
                    <h3 class="text-xl mb-2">Jadwal TOEFL</h3>
                    <table class="w-full rounded">
                        <tr class="bg-primary text-white text-left">
                            <th class="p-2">Tanggal</th>
                            <th class="p-2">Jam</th>
                            <th class="p-2">Lokasi</th>
                            <th class="p-2">Kuota</th>
                            <th class="p-2">Jumlah</th>
                            <th class="p-2"></th>
                        </tr>
                        <tr class="border-y">
                            <td class="p-2">Kamis, 15 Agustus 2024</td>
                            <td class="p-2">08:00</td>
                            <td class="p-2">Lab CBT</td>
                            <td class="p-2">50</td>
                            <td class="p-2">50</td>
                            <td class="p-2">
                                Penuh
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="p-2">Kamis, 15 Agustus 2024</td>
                            <td class="p-2">10:00</td>
                            <td class="p-2">Lab CBT</td>
                            <td class="p-2">50</td>
                            <td class="p-2">20</td>
                            <td class="p-2">
                                <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                            </td>
                        </tr>
                        <tr class="border-y">
                            <td class="p-2">Kamis, 15 Agustus 2024</td>
                            <td class="p-2">13:00</td>
                            <td class="p-2">Lab CBT</td>
                            <td class="p-2">50</td>
                            <td class="p-2">0</td>
                            <td class="p-2">
                                <button class="bg-primary text-white py-2 px-4 rounded">Pilih</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </x-app-layout>
</div>
