@section('title', $title)
<x-app-layout>
    <div class="flex items-center justify-between">
        <h4 class="page-title text-2xl font-medium">Edit Profil</h4>
        <a href="{{ route('biodataAdmin') }}" class="waves-effect waves-light btn btn-light mb-5">
            <i class="fa-solid fa-arrow-left"></i> Back
        </a>
    </div>
    <div class="grid grid-cols-1 gap-4">
        <div>
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="editProfileAdmin" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="grid gap-5">
                            <!-- Nama -->
                            <div class="mb-2">
                                <label for="nama" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nama</label>
                                <input wire:model="nama" type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nama" required autofocus autocomplete="nama">
                                <x-input-error :messages="$errors->get('nama')" class="mt-2"/>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">
                                <!-- Tempat Lahir -->
                                <div class="w-full mb-2">
                                    <label for="tmpt_lahir" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tempat Lahir</label>
                                    <input wire:model="tmpt_lahir" type="text" id="tmpt_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tempat Lahir" name="tmpt_lahir" required autofocus autocomplete="tmpt_lahir">
                                    <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2"/>
                                </div>
                                <!-- Tanggal Lahir -->
                                <div class="w-full mb-2">
                                    <label for="tgl_lahir" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                                    <input wire:model="tgl_lahir" type="date" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="tgl_lahir"  required autofocus autocomplete="tgl_lahir">
                                    <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Alamat -->
                            <div class="mb-2">
                                <label for="alamat" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Alamat</label>
                                <input wire:model="alamat" type="text" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Alamat" required autofocus autocomplete="alamat">
                                <x-input-error :messages="$errors->get('alamat')" class="mt-2"/>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">
                                <!-- NIDN -->
                                <div class="w-full mb-2">
                                    <label for="NIDN" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">NIDN</label>
                                    <input wire:model="NIDN" type="text" id="NIDN" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="NIDN" name="NIDN" inputmode="numeric" autofocus autocomplete="NIDN">
                                    <x-input-error :messages="$errors->get('NIDN')" class="mt-2"/>
                                </div>

                                <!-- Pekerjaan -->
                                <div class="w-full mb-2">
                                    <label for="pekerjaan" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                    <select wire:model="pekerjaan" id="pekerjaan" name="pekerjaan" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="" disabled>Pilih Pekerjaan</option>
                                        @foreach(['Pelajar', 'Mahasiswa', 'Guru', 'Dosen', 'Pegawai Negeri Sipil (PNS)', 'Tentara Nasional Indonesia (TNI)', 'Kepolisian RI (POLRI)', 'Karyawan Swasta', 'Wirausaha', 'Belum/Tidak Bekerja'] as $pekerjaan)
                                            <option value="{{ $pekerjaan }}" {{ $pekerjaan === $dataAdmin->pekerjaan ? 'selected' : '' }}>{{ $pekerjaan }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('pekerjaan')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div>
                                <div>
                                    <label for="jenis_kelamin" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                                    <div class="flex gap-5 mb-2">
                                        <!-- Laki-Laki -->
                                        <div class="mb-2">
                                            <input type="radio" wire:model="jenis_kelamin" name="jenis_kelamin" id="laki_laki" class="with-gap radio-col-primary" value="Laki-Laki" required>
                                            <label for="laki_laki">Laki-Laki</label>
                                        </div>

                                        <!-- Perempuan -->
                                        <div class="mb-2">
                                            <input type="radio" wire:model="jenis_kelamin" name="jenis_kelamin" id="perempuan" class="with-gap radio-col-primary" value="Perempuan" required>
                                            <label for="perempuan">Perempuan</label>
                                        </div>
                                    </div>
                                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2"/>
                                </div>
                            </div>

                            <!-- Instansi -->
                            <div class="mb-2">
                                <label for="instansi" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Instansi</label>
                                <input wire:model="instansi" type="text" id="instansi" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Instansi" required autofocus autocomplete="instansi">
                                <x-input-error :messages="$errors->get('instansi')" class="mt-2"/>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">
                                <!-- Telepon -->
                                <div class="w-full mb-2">
                                    <label for="num_telp" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Nomor Telepon</label>
                                    <input wire:model="num_telp" type="text" id="num_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Nomor Telepon" name="num_telp" inputmode="numeric" autofocus autocomplete="num_telp">
                                    <x-input-error :messages="$errors->get('num_telp')" class="mt-2"/>
                                </div>

                                <!-- Email -->
                                <div class="w-full mb-2">
                                    <label for="email" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Email</label>
                                    <input wire:model="email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" name="email" autofocus autocomplete="email">
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">
                                <!-- Pendidikan -->
                                <div class="w-full mb-2">
                                    <label for="pendidikan" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pendidikan</label>
                                    <select wire:model="Pendidikan" id="pendidikan" name="Pendidikan" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="" disabled>Pilih Pendidikan</option>
                                        @foreach(['Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'D-I/II', 'D-III', 'D-IV', 'S1', 'S2', 'S3'] as $Pendidikan)
                                            <option value="{{ $Pendidikan }}" {{ $Pendidikan === $dataAdmin->Pendidikan ? 'selected' : '' }}>{{ $Pendidikan }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('Pendidikan')" class="mt-2"/>
                                </div>

                                <!-- Tahun Lulus -->
                                <div class="w-full mb-2">
                                    <label for="thn_lulus" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Tahun Lulus</label>
                                    <select wire:model="thn_lulus" id="thn_lulus" name="thn_lulus" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="" disabled>Pilih Tahun Lulus</option>
                                        @foreach (range(date('Y'), date('Y') - 50) as $year)
                                            <option value="{{ $year }}" {{ $year == $dataAdmin->thn_lulus ? 'selected' : '' }}>{{ $year }}</option>
                                        @endforeach
                                    </select>
                                    <x-input-error :messages="$errors->get('thn_lulus')" class="mt-2"/>
                                </div>
                            </div>

                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">
                                <!-- Kewarganegaraan -->
                                <div class="w-full mb-2">
                                    <label for="kewarganegaraan" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Kewarganegaraan</label>
                                    <input wire:model="kewarganegaraan" type="text" id="kewarganegaraan" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Kewarganegaraan" name="kewarganegaraan" autofocus autocomplete="kewarganegaraan">
                                    <x-input-error :messages="$errors->get('Kewarganegaraan')" class="mt-2"/>
                                </div>

                                <!-- Bahasa -->
                                <div class="w-full mb-2">
                                    <label for="bhs_seharian" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Bahasa Sehari</label>
                                    <select wire:model="bhs_seharian" id="bhs_seharian" name="bhs_seharian" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required autofocus>
                                        <option value="" disabled>Pilih Bahasa</option>
                                        @foreach(['Indonesian', 'Malay', 'English', 'Thailand', 'Japanase', 'Korean'] as $bhs_seharian)
                                            <option value="{{ $bhs_seharian }}" {{ $bhs_seharian === $dataAdmin->bhs_seharian ? 'selected' : '' }}>{{ $bhs_seharian }}</option>
                                        @endforeach
                                        <option value="Indonesian">Indonesia</option>
                                        <option value="Malay">Malaysia</option>
                                        <option value="English">English</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Japanase">Jepang</option>
                                        <option value="Korean">Korean</option>
                                    </select>
                                    <x-input-error :messages="$errors->get('bhs_seharian')" class="mt-2"/>
                                </div>
                            </div>

                            {{--                            <div class="flex flex-col md:flex-row gap-5 justify-between mb-2">--}}
                            {{--                                <!-- Pas Foto -->--}}
                            {{--                                <div class="w-full mb-2">--}}
                            {{--                                    <label for="pasFoto" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Pas Foto</label>--}}
                            {{--                                    <input wire:model.defer="pasFoto" id="pasFoto" class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" type="file" name="pasFoto" autofocus accept="image/jpeg, image/png, image/jpg">--}}
                            {{--                                    <input wire:model="pasFoto" id="pasFoto" type="file" name="pasFoto" accept="image/jpeg, image/png, image/jpg">--}}
                            {{--                                    <div wire:loading wire:target="pasFoto">Uploading...</div>--}}
                            {{--                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Ukuran file maksimal: 1 MB. Format yang diperbolehkan: JPG, JPEG, PNG.</p>--}}
                            {{--                                    <x-input-error :messages="$errors->get('pasFoto')" class="mt-2"/>--}}
                            {{--                                </div>--}}

                            {{--                                <!-- Foto KTP -->--}}
                            {{--                                <div class="w-full mb-2">--}}
                            {{--                                    <label for="ktp" class="block mb-2 text-base font-medium text-gray-900 dark:text-white">Foto KTP</label>--}}
                            {{--                                    <input wire:model="ktp" id="ktp" class="block w-full text-base text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" type="file" name="ktp" autofocus accept="image/jpeg, image/png, image/jpg">--}}
                            {{--                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Ukuran file maksimal: 1 MB. Format yang diperbolehkan: JPG, JPEG, PNG.</p>--}}
                            {{--                                    <x-input-error :messages="$errors->get('ktp')" class="mt-2"/>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}

                            <!-- Save Button -->
                            <div class="flex justify-center">
                                <button type="submit" class="w-1/2 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-base px-4 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
