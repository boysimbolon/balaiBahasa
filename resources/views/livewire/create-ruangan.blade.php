
<div>
    <form wire:submit.prevent="save">
        @csrf
        <div>
            <label for="nama_ruangan">Nama Ruangan</label>
            <input type="text" id="nama_ruangan" wire:model="nama_ruangan">
            @error('nama_ruangan') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="kapasitas">Kapasitas</label>
            <input type="number" id="kapasitas" wire:model="kapasitas">
            @error('kapasitas') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="alamat">Alamat</label>
            <textarea id="alamat" wire:model="alamat"></textarea>
            @error('alamat') <span class="error">{{ $message }}</span> @enderror
        </div>
        <x-primary-button class="w-full py-3">
            {{ __('Create') }}
        </x-primary-button>
    </form>
</div>
