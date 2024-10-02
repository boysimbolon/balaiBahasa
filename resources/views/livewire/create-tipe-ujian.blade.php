@section('title', $title)
<div>
    <form wire:submit.prevent="save">
        @csrf
        <div>
            <label for="jenis_ujian">Jenis Ujian</label>
            <input type="text" id="jenis_ujian" wire:model="jenis_ujian">
            @error('jenis_ujian') <span class="error">{{ $message }}</span> @enderror
        </div>
        <x-primary-button class="w-full py-3">
            {{ __('Create') }}
        </x-primary-button>
    </form>
</div>
