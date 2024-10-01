<div>
    <form wire:submit.prevent="save">
        <div>
            <label for="jenis_ujian">Jenis Ujian</label>
            <input type="text" id="jenis_ujian" wire:model="jenis_ujian">
            @error('jenis_ujian') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">Simpan</button>
    </form>
</div>
