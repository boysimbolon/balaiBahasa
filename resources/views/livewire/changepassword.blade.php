@section('title', $title)
<div>
    <x-app-layout>
        <div class="p-5 h-full">
            <x-heading-page>Ganti Password</x-heading-page>
            <div class="bg-white drop-shadow-lg w-full xl:w-2/3 mt-1 rounded p-5">
                <form action="" class="flex flex-col gap-4">
                    <div>
                        <div class="flex md:items-center justify-between flex-col md:flex-row">
                            <label for="old_password" class="font-medium">Password Lama</label>
                            <x-text-input wire:model="" id="old_password" class="block mt-1 w-full md:w-1/3" type="password" name="old_password" placeholder="Password Lama" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('')" class="mt-2"/>
                    </div>
                    <div>
                        <div class="flex md:items-center justify-between flex-col md:flex-row">
                            <label for="new_password" class="font-medium">Password Baru</label>
                            <x-text-input wire:model="" id="new_password" class="block mt-1 w-full md:w-1/3" type="password" name="new_password" placeholder="Password Baru" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('')" class="mt-2"/>
                    </div>
                    <div>
                        <div class="flex md:items-center justify-between flex-col md:flex-row">
                            <label for="confirm_new_password" class="font-medium">Konfirmasi Password Baru</label>
                            <x-text-input wire:model="" id="confirm_new_password" class="block mt-1 w-full md:w-1/3" type="password" name="confirm_new_password" placeholder="Konfirmasi Password Baru" required autofocus/>
                        </div>
                        <x-input-error :messages="$errors->get('')" class="mt-2"/>
                    </div>
                    <div class="flex md:justify-end w-full">
                        <x-primary-button class="w-full md:w-1/3 mt-5 bg-primary hover:bg-blue-500">
                            {{ __('Ganti Password') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </x-app-layout>
</div>
