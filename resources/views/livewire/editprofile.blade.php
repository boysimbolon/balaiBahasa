<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <div class="w-full items-center justify-between flex mb-2">
                <x-heading-page>Edit Profil</x-heading-page>
                <a href="{{ route('biodata-user') }}" class="bg-neutral-400 hover:bg-neutral-500 p-2 md:py-2 md:px-4 text-white rounded flex gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left"><path d="m12 19-7-7 7-7"/><path d="M19 12H5"/></svg>
                    Back
                </a>
            </div>
            <div class="bg-white drop-shadow-lg w-full xl:w-2/3 mt-1 rounded p-5">
                <form wire:submit.prevent="editProfile" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col gap-10">
                        <!-- Nama -->
                        <div class="h-11 flex items-center">
                            <div class="w-full">
                                <x-input-label for="tmpt_lahir" :value="__('Nama')"/>
                                <input wire:model="nama" id="nama" class="block mt-1 w-full rounded" placeholder="Nama" type="text" name="nama" required autofocus autocomplete="nama"/>
                                <x-input-error :messages="$errors->get('nama')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="h-11 flex items-center gap-5">
                            <!-- Tempat Lahir -->
                            <div class="w-1/2">
                                <x-input-label for="tmpt_lahir" :value="__('Tempat Lahir')"/>
                                <input wire:model="tmpt_lahir" id="tmpt_lahir" class="block mt-1 w-full rounded" placeholder="Tempat Lahir" type="text" name="tmpt_lahir" required autofocus autocomplete="tmpt_lahir"/>
                                <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2"/>
                            </div>
                            <!-- Tanggal Lahir -->
                            <div class="w-1/2">
                                <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')"/>
                                <input wire:model="tgl_lahir" id="tgl_lahir" class="block mt-1 w-full rounded" type="date" name="tgl_lahir"  required autofocus autocomplete="tgl_lahir"/>
                                <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2"/>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="h-11 flex items-center">
                            <div class="w-full">
                                <x-input-label for="alamat" :value="__('Alamat')"/>
                                <input wire:model="alamat" id="alamat" class="block mt-1 w-full rounded" placeholder="Alamat" type="text" name="alamat" required autofocus autocomplete="alamat"/>
                                <x-input-error :messages="$errors->get('alamat')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="h-11 flex items-between gap-5">
                            <!-- NIDN -->
                            <div class="w-1/2">
                                <x-input-label for="NIDN" :value="__('NIDN')"/>
                                <input wire:model="NIDN" id="NIDN" class="block mt-1 w-full rounded" placeholder="NIDN" type="text" name="NIDN" autofocus autocomplete="NIDN"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                            </div>
                            <!-- Pekerjaan -->
                            <div class="w-1/2">
                                <x-input-label for="pekerjaan" :value="__('Pekerjaan')"/>
                                <select wire:model="pekerjaan" id="pekerjaan" name="pekerjaan" class="block mt-1 w-full rounded" required autofocus>
                                    <option value="" disabled>Pilih Pekerjaan</option>
                                    @foreach(['Pelajar', 'Mahasiswa', 'Guru', 'Dosen', 'Pegawai Negeri Sipil (PNS)', 'Tentara Nasional Indonesia (TNI)', 'Kepolisian RI (POLRI)', 'Karyawan Swasta', 'Wirausaha', 'Belum/Tidak Bekerja'] as $pekerjaan)
                                        <option value="{{ $pekerjaan }}" {{ $pekerjaan === $users->pekerjaan ? 'selected' : '' }}>{{ $pekerjaan }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('pekerjaan')" class="mt-2"/>
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="h-11 flex items-center">
                            <div>
                                <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')"/>
                                <div class="flex items-center justify-between mt-1">
                                    <div class="w-1/2 flex items-center gap-1">
                                        <input type="radio" wire:model="jenis_kelamin" id="laki_laki" name="jenis_kelamin" value="Laki-Laki" class="block rounded" required autofocus>
                                        <label for="laki_laki">Laki-Laki</label>
                                    </div>
                                    <div class="w-1/2 flex items-center gap-1">
                                        <input type="radio" wire:model="jenis_kelamin" id="perempuan" name="jenis_kelamin" value="Perempuan" class="block rounded" required autofocus>
                                        <label for="perempuan">Perempuan</label>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2"/>
                            </div>
                        </div>
                        <!-- Instansi -->
                        <div class="h-11 flex items-center">
                            <div class="w-full">
                                <x-input-label for="instansi" :value="__('Instansi')"/>
                                <input wire:model="instansi" id="instansi" class="block mt-1 w-full rounded" placeholder="Instansi" type="text" name="instansi" required autofocus autocomplete="instansi"/>
                                <x-input-error :messages="$errors->get('instansi')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="h-11 flex items-between gap-5">
                            <!-- Telepon -->
                            <div class="w-1/2">
                                <p class="w-full">
                                    <x-input-label for="num_telp" :value="__('Nomor Telepon')"/>
                                    <input wire:model="num_telp" id="num_telp" class="block mt-1 w-full rounded" placeholder="No Telepon" type="text" inputmode="numeric" name="num_telp" required autofocus autocomplete="num_telp"/>
                                    <x-input-error :messages="$errors->get('num_telp')" class="mt-2"/>
                                </p>
                            </div>
                            <!-- Email Address -->
                            <div class="w-1/2">
                                <p class="w-full">
                                    <x-input-label for="email" :value="__('Email')"/>
                                    <input wire:model="email" id="email" class="block mt-1 w-full rounded" placeholder="Email" type="email" name="email" required autocomplete="email"/>
                                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                                </p>
                            </div>
                        </div>
                        <div class="h-11 flex items-between gap-5">
                            <!-- Pendidikan -->
                            <div class="w-1/2">
                                <x-input-label for="pendidikan" :value="__('Pendidikan')"/>
                                <select wire:model="Pendidikan" id="Pendidikan" name="Pendidikan" class="block mt-1 w-full rounded" required autofocus>
                                    <option value="" disabled>Pilih Pendidikan</option>
                                    @foreach(['Tidak/Belum Sekolah', 'Belum Tamat SD/Sederajat', 'Tamat SD/Sederajat', 'SLTP/Sederajat', 'SLTA/Sederajat', 'D-I/II', 'D-III', 'D-IV', 'S1', 'S2', 'S3'] as $Pendidikan)
                                        <option value="{{ $Pendidikan }}" {{ $Pendidikan === $users->Pendidikan ? 'selected' : '' }}>{{ $Pendidikan }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('Pendidikan')" class="mt-2"/>
                            </div>
                            <!-- Tahun Lulus -->
                            <div class="w-1/2">
                                <x-input-label for="thn_lulus" :value="__('Tahun Lulus')"/>
                                <select wire:model="thn_lulus" id="thn_lulus" name="thn_lulus" class="block mt-1 w-full rounded" required autofocus>
                                    <option value="" disabled>Pilih Tahun Lulus</option>
                                    @foreach (range(date('Y'), date('Y') - 50) as $year)
                                        <option value="{{ $year }}" {{ $year == $users->thn_lulus ? 'selected' : '' }}>{{ $year }}</option>
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('tahun_lulus')" class="mt-2"/>
                            </div>
                        </div>
                        <div class="h-11 flex items-between gap-5">
                            <!-- Kewarganegaraan -->
                            <div class="w-1/2">
                                <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')"/>
                                <input wire:model="kewarganegaraan" id="kewarganegaraan" class="block mt-1 w-full rounded" type="text" name="kewarganegaraan" required autofocus autocomplete="kewarganegaraan" placeholder="Kewarganegaraan"/>
                                <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2"/>
                            </div>
                            <!-- Bahasa -->
                            <div class="w-1/2">
                                <x-input-label for="bhs_seharian" :value="__('Bahasa Sehari')"/>
                                <select wire:model="bhs_seharian" id="bhs_seharian" name="bhs_seharian" class="block mt-1 w-full rounded" required autofocus>
                                    <option value="" disabled>Pilih Bahasa</option>
                                    @foreach(['Indonesian', 'Malay', 'English', 'Thailand', 'Japanase', 'Korean'] as $bhs_seharian)
                                        <option value="{{ $bhs_seharian }}" {{ $bhs_seharian === $users->bhs_seharian ? 'selected' : '' }}>{{ $bhs_seharian }}</option>
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
                        <div class="h-fit flex flex-col md:flex-row items-between gap-5 md:py-3">
                            <div class="w-full md:w-1/2">
                                <x-input-label for="pasFoto" :value="__('Pas Foto')"/>
                                <input wire:model.defer="pasFoto" id="pasFoto" class="block mt-1 w-full" type="file" name="pasFoto" autofocus accept="image/jpeg, image/png, image/jpg"/>
                                <x-input-error :messages="$errors->get('pasFoto')" class="mt-2"/>
                            </div>
                            <div class="w-full md:w-1/2">
                                <x-input-label for="ktp" :value="__('KTP')"/>
                                <input wire:model="ktp" id="ktp" class="block mt-1 w-full" type="file" name="ktp" autofocus accept="image/jpeg, image/png, image/jpg"/>
                                <x-input-error :messages="$errors->get('ktp')" class="mt-2"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="w-1/3 mt-5 bg-green-500 py-2 mx-auto rounded text-sm hover:font-semibold text-white hover:scale-105 hover:transition-all hover:duration-300 hover:ease-in-out">Save</button>
                </form>
            </div>
        </div>
    </x-app-layout>
</div>
