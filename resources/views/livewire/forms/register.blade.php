<div>
    <div class="text-center pt-5">
        <h1 class="font-bold text-3xl mb-1">Registrasi</h1>
        <h3 class="font-light text-xl">Balai Bahasa</h3>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="save" class="flex flex-col items-center gap-2 p-5">
        <div class="flex divide-x-2">
            <div class="w-1/2 px-5">
                <!-- Name -->
                <div class="mb-1">
                    <x-input-label for="name" :value="__('Nama')"/>
                    <x-text-input wire:model="nama" id="nama" class="block mt-1 w-full" type="text" name="nama" placeholder="Nama" required autofocus autocomplete="nama"/>
                    <x-input-error :messages="$errors->get('nama')" class="mt-2"/>
                </div>
                <!-- NIK -->
                <div class="mb-1">
                    <x-input-label for="nik" :value="__('NIK')"/>
                    <x-text-input wire:model="nik" id="nik" class="block mt-1 w-full" type="text" name="nik" placeholder="NIK" inputmode="numeric" required autofocus autocomplete="nik"/>
                    <x-input-error :messages="$errors->get('nik')" class="mt-2"/>
                </div>
                <div class="flex gap-5 justify-between mb-1">
                    <!-- Tempat Lahir -->
                    <div class="w-1/2">
                        <x-input-label for="tmpt_lahir" :value="__('Tempat Lahir')"/>
                        <x-text-input wire:model="tmpt_lahir" id="tmpt_lahir" class="block mt-1 w-full" type="text" name="tmpt_lahir" placeholder="Tempat Lahir" required autofocus autocomplete="tmpt_lahir"/>
                        <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2"/>
                    </div>
                    <!-- Tanggal Lahir -->
                    <div class="w-1/2">
                        <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')"/>
                        <x-text-input wire:model="tgl_lahir" id="tgl_lahir" class="block mt-1 w-full" type="date" name="tgl_lahir" required autofocus autocomplete="tgl_lahir"/>
                        <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2"/>
                    </div>
                </div>
                <!-- Alamat -->
                <div class="mb-1">
                    <x-input-label for="alamat" :value="__('Alamat')"/>
                    <x-text-input wire:model="alamat" id="alamat" class="block mt-1 w-full" type="text" name="alamat" placeholder="Alamat" required autofocus autocomplete="alamat"/>
                    <x-input-error :messages="$errors->get('alamat')" class="mt-2"/>
                </div>
                <div class="flex gap-5 justify-between mb-1">
                    <!-- NIDN -->
                    <div>
                        <x-input-label for="NIDN" :value="__('NIDN')"/>
                        <x-text-input wire:model="NIDN" id="NIDN" class="block mt-1 w-full" type="text" name="NIDN" placeholder="NIDN" autofocus autocomplete="NIDN"/>
                        <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                    </div>
                    <!-- Pekerjaan -->
                    <div>
                        <x-input-label for="pekerjaan" :value="__('Pekerjaan')"/>
                        <select wire:model="pekerjaan" id="pekerjaan" name="pekerjaan" class="block mt-1 w-full rounded" placeholder="Pekerjaan" required autofocus>
                            <option value="" disabled>Pilih Pekerjaan</option>
                            <option value="Pelajar">Pelajar</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Guru">Guru</option>
                            <option value="Dosen">Dosen</option>
                            <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                            <option value="Tentara Nasional Indonesia (TNI)">Tentara Nasional Indonesia (TNI)</option>
                            <option value="Kepolisian RI (POLRI)">Kepolisian RI (POLRI)</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Belum/Tidak Bekerja">Belum/Tidak Bekerja</option>
                        </select>
                        <x-input-error :messages="$errors->get('pekerjaan')" class="mt-2"/>
                    </div>
                </div>
                <!-- Jenis Kelamin -->
                <div class="mb-1">
                    <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')"/>
                    <div class="flex items-center justify-between mt-1">
                        <div class="w-1/2 flex items-center gap-1">
                            <input type="radio" wire:model="jenis_kelamin" id="laki_laki" name="jenis_kelamin" value="L" class="block rounded" required autofocus>
                            <label for="laki_laki">Laki-Laki</label>
                        </div>
                        <div class="w-1/2 flex items-center gap-1">
                            <input type="radio" wire:model="jenis_kelamin" id="perempuan" name="jenis_kelamin" value="P" class="block rounded" required autofocus>
                            <label for="perempuan">Perempuan</label>
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2"/>
                </div>
                <!-- Instansi -->
                <div class="mb-1">
                    <x-input-label for="instansi" :value="__('Instansi')"/>
                    <x-text-input wire:model="instansi" id="instansi" class="block mt-1 w-full" type="text" name="instansi" placeholder="Instansi" required autofocus autocomplete="instansi"/>
                    <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                </div>
            </div>
            <div class="w-1/2 px-5">
                <!-- Nomor Telepon -->
                <div class="mb-1">
                    <x-input-label for="num_telp" :value="__('Nomor Telepon')"/>
                    <x-text-input wire:model="num_telp" id="num_telp" class="block mt-1 w-full" type="number" name="num_telp" placeholder="No Telepon" required autofocus autocomplete="num_telp"/>
                    <x-input-error :messages="$errors->get('num_telp')" class="mt-2"/>
                </div>
                <!-- Email Address -->
                <div class="mb-1">
                    <x-input-label for="email" :value="__('Email')"/>
                    <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" placeholder="Email" required autocomplete="email"/>
                    <x-input-error :messages="$errors->get('email')" class="mt-2"/>
                </div>
                <!-- Pendidikan -->
                <div class="mb-1">
                    <x-input-label for="Pendidikan" :value="__('Pendidikan')"/>
                    <select wire:model="Pendidikan" id="Pendidikan" name="Pendidikan" class="block mt-1 w-full rounded" required autofocus>
                        <option value="" disabled>Pilih Pendidikan</option>
                        <option value="Tidak/Belum Sekolah">Tidak/Belum Sekolah</option>
                        <option value="Belum Tamat SD/Sederajat">Belum Tamat SD/Sederajat</option>
                        <option value="Tamat SD/Sederajat">Tamat SD/Sederajat</option>
                        <option value="SLTP/Sederajat">SLTP/Sederajat</option>
                        <option value="SLTA/Sederajat">SLTA/Sederajat</option>
                        <option value="D-I/II">D-I/II</option>
                        <option value="D-III">D-III</option>
                        <option value="D-IV">D-IV</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                    <x-input-error :messages="$errors->get('Pendidikan')" class="mt-2"/>
                </div>
                <!-- Tahun Lulus -->
                <div class="mb-1">
                    <x-input-label for="thn_lulus" :value="__('Tahun Lulus')"/>
                    <select wire:model="thn_lulus" id="thn_lulus" name="thn_lulus" class="block mt-1 w-full rounded" required autofocus>
                        <option value="">Pilih Tahun Lulus</option>
                        @foreach (range(date('Y'), date('Y') - 50) as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                    <x-input-error :messages="$errors->get('tahun_lulus')" class="mt-2"/>
                </div>
                <div class="flex gap-5 justify-between mb-1">
                    <!-- Kewarganegaraan -->
                    <div class="w-1/2">
                        <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')"/>
                        <x-text-input wire:model="kewarganegaraan" id="kewarganegaraan" class="block mt-1 w-full" type="text" name="kewarganegaraan" placeholder="Kewarganegaraan" required autofocus autocomplete="kewarganegaraan"/>
                        <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2"/>
                    </div>
                    <!-- Bahasa -->
                    <div class="w-1/2">
                        <x-input-label for="bhs_seharian" :value="__('Bahasa Sehari')"/>
                        <select wire:model="bhs_seharian" id="bhs_seharian" name="bhs_seharian" class="block mt-1 w-full rounded" required autofocus>
                            <option value="" disabled>Pilih Bahasa</option>
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
                <div class="mb-1">
                    @if($pasFoto)
                        <img class="rounded w-10 h-10 m-2 block" src="{{$pasFoto->temporaryUrl()}}"
                    @endif
                    <x-input-label for="pasFoto" :value="__('Pas Foto')"/>
                    <x-text-input wire:model="pasFoto" id="pasFoto" class="block mt-1 w-full rounded-none shadow-none" type="file" name="pasFoto" required autofocus accept="image/jpeg, image/png, image/jpg"/>
                    <div wire:loading wire:target="pasFoto">Uploading...</div>
                    <x-input-error :messages="$errors->get('pasFoto')" class="mt-2"/>
                </div>
                <div class="mb-1">
                    @if($ktp)
                        <img class="rounded w-10 h-10 m-2 block" src="{{$ktp->temporaryUrl()}}"
                    @endif
                    <x-input-label for="ktp" :value="__('KTP')"/>
                    <x-text-input wire:model="ktp" id="ktp" class="block mt-1 w-full rounded-none shadow-none" type="file" name="ktp" required autofocus accept="image/jpeg, image/png, image/jpg"/>
                    <div wire:loading wire:target="ktp">Uploading...</div>
                    <x-input-error :messages="$errors->get('ktp')" class="mt-2"/>
                </div>
            </div>
        </div>
        <x-primary-button class="w-1/2 mt-5">
            {{ __('Registrasi') }}
        </x-primary-button>
        <!-- Registration -->
        <div class="text-sm text-center mt-4">
            <p>Sudah memiliki akun? <a class="text-blue-500 hover:text-blue-700 hover:underline" href="{{ route('login') }}" wire:navigate>{{ __('Login') }}</a></p>
        </div>
    </form>
</div>
