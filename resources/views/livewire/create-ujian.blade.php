@section('title', $title)

<div>
    <form wire:submit.prevent="Save">
        <div>
            <label for="id_jenis_ujian">Jenis Ujian</label>
            <select id="id_jenis_ujian" wire:model="id_jenis_ujian">
                <option value="">Pilih Jenis Ujian</option>
                @foreach($JenisUjian as $option)
                    <option value="{{ $option->id }}">{{ $option->jenis_ujian }}</option>
                @endforeach
            </select>
            @error('id_jenis_ujian') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="id_ruangan">Ruangan</label>
            <select id="id_ruangan" wire:model="id_ruangan">
                <option value="">Pilih Ruangan</option>
                @foreach($ruangan as $option)
                    <option value="{{ $option->id }}">{{ $option->nama_ruangan }}</option>
                @endforeach
            </select>
            @error('id_ruangan') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="tanggal">Tanggal</label>
            <input type="date" id="tanggal" wire:model="tanggal">
            @error('tanggal') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="jam">Jam</label>
            <input type="time" id="jam" wire:model="jam">
            @error('jam') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="no_modul">No Modul</label>
            <input type="text" id="no_modul" wire:model="no_modul">
            @error('no_modul') <span class="text-red-600">{{ $message }}</span> @enderror
        </div>

        <button class="w-full py-3" type="submit">Create</button>
    </form>
</div>
