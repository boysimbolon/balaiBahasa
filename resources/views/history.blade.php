<x-app-layout>
    <div class="p-5 h-full">
        <x-heading-page>History</x-heading-page>
        <div class="bg-white drop-shadow-lg w-fit md:w-full mt-1 rounded p-5 flex flex-col gap-4">
            <table class="w-full">
                <tr class="bg-primary text-white text-left rounded h-8">
                    <th class="p-2" rowspan="2">Tanggal</th>
                    <th class="p-2" rowspan="2">Lokasi</th>
                    <th class="p-2 text-center" colspan="4">Nilai</th>
                    <th class="p-2" rowspan="2">No Sert</th>
                    <th class="p-2" rowspan="2">Sertifikat</th>
                </tr>
                <tr class="bg-primary text-white text-left border-y h-10">
                    <th>Listening</th>
                    <th>Structure</th>
                    <th>Reading</th>
                    <th>Skor</th>
                </tr>
                <tr class="border-y">
                    <td class="p-2">2024-08-15</td>
                    <td class="p-2">Lab CBT</td>
                    <td class="p-2">51</td>
                    <td class="p-2">51</td>
                    <td class="p-2">51</td>
                    <td class="p-2">520</td>
                    <td class="p-2">2308301</td>
                    <td class="p-2">
                        <button class="bg-primary py-2 px-4 rounded text-white">
                            Download
                        </button>
                    </td>
                </tr>
                <tr class="border-y">
                    <td class="p-2">2024-08-16</td>
                    <td class="p-2">Lab CBT</td>
                    <td class="p-2">53</td>
                    <td class="p-2">49</td>
                    <td class="p-2">55</td>
                    <td class="p-2">523</td>
                    <td class="p-2">2308340</td>
                    <td class="p-2">
                        <button class="bg-primary py-2 px-4 rounded text-white">
                            Download
                        </button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</x-app-layout>
