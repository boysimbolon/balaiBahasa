@section('title', $title)
<x-app-layout>
    @if (session()->has('message'))
        <div class="w-full bg-green-600 p-2 rounded text-white" >
            {{ session('message') }}
        </div>
    @endif
    <h4 class="page-title text-2xl font-medium">Pembayaran</h4>
    <div class="grid grid-cols-1 gap-4 mt-6">
        <div>
            <div class="box">
                <div class="box-body">
                    <p class="mb-4">Untuk melanjutkan proses pendaftaran ujian, Anda diwajibkan untuk melakukan pembayaran Ujian. Pembayaran dapat dilakukan melalui BNI Virtual Account.</p>
                    <div class="flex justify-between items-center mt-3 mx-5">
                        <h2 class="box-title text-xl m-0 font-bold">Nomor Virtual Account : {{$va}}</h2>
                        <div class="flex items-center gap-1 rounded border-gray-100 border-2 p-2 cursor-pointer"  onclick="copyToClipboard({{$va}})">
                            <i class="fa-solid fa-copy"></i>
                            <span id="salin">Salin</span>
                            <span class="hidden text-green-600" id="message">Tersalin</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="box">
                <div class="box-body">
                    <h4 class="box-title text-xl font-medium">History Pembayaran</h4>
                    <div class="table-responsive">
                        <table class="text-fade table w-full ">
                            <thead class="bg-primary text-left">
                            <tr>
                                <th>Jenis Ujian</th>
                                <th>Tanggal Ujian</th>
                                <th>Jam</th>
                                <th>Lokasi</th>
                                <th>Waktu Pesan</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($Data->isEmpty())
                                <tr class="border-y">
                                    <td class="p-2 text-center" colspan="6">Belum ada data</td>
                                </tr>
                            @else
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
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function copyToClipboard(text) {
            // Gunakan navigator.clipboard untuk menyalin teks
            navigator.clipboard.writeText(text).then(function() {
                console.log('Teks berhasil disalin:', text);

                // Tampilkan pesan sukses
                var successMessage = document.getElementById("message");
                var salin = document.getElementById("salin");
                successMessage.style.display = "block";
                salin.style.display = "none";

                // Sembunyikan pesan setelah 2 detik
                setTimeout(function() {
                    successMessage.style.display = "none";
                    salin.style.display = "block";
                }, 2000);
            }).catch(function(err) {
                console.error('Gagal menyalin teks:', err);
            });
        }

    </script>
</x-app-layout>
