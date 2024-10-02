@section('title', $title)
<div>
    <form wire:submit.prevent="Save">
        @csrf
        <div>
            <label for="id_jenis_ujian">Jenis Ujian</label>
            <x-select-option id="id_jenis_ujian" wire:model="id_jenis_ujian">
                <option value="">Pilih Jenis Ujian</option>
                @foreach($JenisUjian as $option)
                    <option value="{{ $option->id }}">{{ $option->jenis_ujian }}</option>
                @endforeach
            </x-select-option>
            @error('id_jenis_ujian') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="id_ruangan">Ruangan</label>
            <x-select-option id="id_ruangan" wire:model="id_ruangan">
                <option value="">Pilih Ruangan</option>
                @foreach($ruangan as $option)
                    <option value="{{ $option->id }}">{{ $option->nama_ruangan }}</option>
                @endforeach
            </x-select-option>
            @error('id_ruangan') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="tanggal">Tanggal</label>
            <x-text-input type="date" id="tanggal" wire:model="tanggal">
            @error('tanggal') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="jam">Jam</label>
            <x-text-input type="time" id="jam" wire:model="jam">
            @error('jam') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="status">No_Modul</label>
            <x-text-input type="text" id="no_modul" wire:model="no_modul">
            @error('no_modul') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="enroll">enroll_key</label>
            <x-text-input type="text" id="enroll" wire:model="enroll_key">
            @error('enroll') <span class="error">{{ $message }}</span> @enderror
        </div>

        <x-primary-button class="w-full py-3">
            {{ __('Create') }}
        </x-primary-button>
    </form>
</div>
