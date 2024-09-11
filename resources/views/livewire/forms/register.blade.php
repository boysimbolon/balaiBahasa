
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="save">
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama')"/>
            <x-text-input wire:model="nama" id="nama" class="block mt-1 w-full" type="text" name="nama" required
                          autofocus autocomplete="nama"/>
            <x-input-error :messages="$errors->get('nama')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="nik" :value="__('NIK')"/>
            <x-text-input wire:model="nik" id="nik" class="block mt-1 w-full" type="number" name="nik" required
                          autofocus autocomplete="nik"/>
            <x-input-error :messages="$errors->get('nik')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="tmpt_lahir" :value="__('Tempat Lahir')"/>
            <x-text-input wire:model="tmpt_lahir" id="tmpt_lahir" class="block mt-1 w-full" type="text"
                          name="tmpt_lahir" required autofocus autocomplete="tmpt_lahir"/>
            <x-input-error :messages="$errors->get('tmpt_lahir')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="tgl_lahir" :value="__('Tanggal Lahir')"/>
            <x-text-input wire:model="tgl_lahir" id="tgl_lahir" class="block mt-1 w-full" type="date" name="tgl_lahir"
                          required autofocus autocomplete="tgl_lahir"/>
            <x-input-error :messages="$errors->get('tgl_lahir')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="pekerjaan" :value="__('Pekerjaan')"/>
            <select wire:model="pekerjaan" id="pekerjaan" name="pekerjaan" class="block mt-1 w-full" required autofocus>
                <option value="">Pilih Pekerjaan</option>
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

        <div>
            <x-input-label for="NIDN" :value="__('NIDN')"/>
            <x-text-input wire:model="NIDN" id="NIDN" class="block mt-1 w-full" type="text" name="NIDN" autofocus
                          autocomplete="DIDN"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="alamat" :value="__('Alamat')"/>
            <x-text-input wire:model="alamat" id="alamat" class="block mt-1 w-full" type="text" name="alamat" required
                          autofocus autocomplete="alamat"/>
            <x-input-error :messages="$errors->get('alamat')" class="mt-2"/>
        </div>
        {{-- wrong it must use option --}}
        <div>
            <x-input-label for="jenis_kelamin" :value="__('Jenis Kelamin')"/>
            <select wire:model="jenis_kelamin" id="jenis_kelamin" name="jenis_kelamin" class="block mt-1 w-full"
                    required autofocus>
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            <x-input-error :messages="$errors->get('jenis_kelamin')" class="mt-2"/>
        </div>

        <div>
            <x-input-label for="instansi" :value="__('Instansi')"/>
            <x-text-input wire:model="instansi" id="instansi" class="block mt-1 w-full" type="text" name="instansi"
                          required autofocus autocomplete="instansi"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="num_telp" :value="__('Nomor Telepon')"/>
            <x-text-input wire:model="num_telp" id="num_telp" class="block mt-1 w-full" type="number" name="num_telp"
                          required autofocus autocomplete="num_telp"/>
            <x-input-error :messages="$errors->get('num_telp')" class="mt-2"/>
        </div>
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input wire:model="email" id="email" class="block mt-1 w-full" type="email" name="email" required
                          autocomplete="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>
        {{--  wrong it must use option      --}}
        <div>
            <x-input-label for="Pendidikan" :value="__('Pendidikan')"/>
            <select wire:model="Pendidikan" id="Pendidikan" name="Pendidikan" class="block mt-1 w-full" required
                    autofocus>
                <option value="">Pilih Pendidikan</option>
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
        <div>
            <x-input-label for="thn_lulus" :value="__('Tahun Lulus')"/>
            <select wire:model="thn_lulus" id="thn_lulus" name="thn_lulus" class="block mt-1 w-full" required
                    autofocus>
                <option value="">Pilih Tahun Lulus</option>
                @foreach (range(date('Y'), date('Y') - 50) as $year)
                    <option value="{{ $year }}">{{ $year }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('tahun_lulus')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="kewarganegaraan" :value="__('Kewarganegaraan')"/>
            <x-text-input wire:model="kewarganegaraan" id="kewarganegaraan" class="block mt-1 w-full" type="text"
                          name="kewarganegaraan" required autofocus autocomplete="kewarganegaraan"/>
            <x-input-error :messages="$errors->get('kewarganegaraan')" class="mt-2"/>
        </div>
        <div>
            <x-input-label for="bhs_seharian" :value="__('Bahasa Sehari')"/>
            <select wire:model="bhs_seharian" id="bhs_seharian" name="bhs_seharian" class="block mt-1 w-full" required
                    autofocus>
                <option value="">Pilih Bahasa</option>
                <option value="Indonesian">Indonesia</option>
                <option value="Malay">Malaysia</option>
                <option value="English">English</option>
                <option value="Thailand">Thailand</option>
                <option value="Japanase">Jepang</option>
                <option value="Korean">Korean</option>
            </select>
            <x-input-error :messages="$errors->get('bhs_seharian')" class="mt-2"/>
        </div>
        <div>
            @if($pasFoto)
                <img class="rounded w-10 h-10 m-2 block" src="{{$pasFoto->temporaryUrl()}}"
            @endif
            <x-input-label for="pasFoto" :value="__('Pas Foto')"/>
            <x-text-input wire:model="pasFoto" id="pasFoto" class="block mt-1 w-full" type="file" name="pasFoto" required
                   autofocus accept="image/jpeg, image/png, image/jpg"/>
            <div wire:loading wire:target="pasFoto">Uploading...</div>
            <x-input-error :messages="$errors->get('pasFoto')" class="mt-2"/>
        </div>
        <div>
            @if($ktp)
                <img class="rounded w-10 h-10 m-2 block" src="{{$ktp->temporaryUrl()}}"
            @endif
            <x-input-label for="ktp" :value="__('KTP')"/>
            <x-text-input wire:model="ktp" id="ktp" class="block mt-1 w-full" type="file" name="ktp" required autofocus
                   accept="image/jpeg, image/png, image/jpg"/>
            <x-input-error :messages="$errors->get('ktp')" class="mt-2"/>
            <div wire:loading wire:target="ktp">Uploading...</div>
        </div>


        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}" wire:navigate>
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

</div>
