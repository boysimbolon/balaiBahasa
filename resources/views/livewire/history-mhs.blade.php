@section('title', $title)
<x-app-layout>
    <h4 class="page-title text-2xl font-medium">History</h4>
    <div class="grid grid-rows-1 gap-x-4 mt-6">
        <div class="">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
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
                            </thead>
                            <tbody>
                            <tr>
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
