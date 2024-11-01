@section('title', $title)
<x-app-layout>
    <h4 class="page-title text-2xl font-medium">Ganti Password</h4>
    <div class="grid-c grid-cols-1 gap-4">
        <div>
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="updatePassword" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="grid gap-5">
                            <!-- Password Lama -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="old_password" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Password Lama</label>
                                    <input type="password" wire:model="old_password" name="old_password" id="old_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password Lama" required autofocus>
                                </div>
                                <x-input-error :messages="$errors->get('old_password')" class="mt-2"/>
                            </div>

                            <!-- Password Baru -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="new_password" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Password Baru</label>
                                    <input type="password" wire:model="new_password" name="new_password" id="new_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Password Baru" required autofocus>
                                </div>
                                <x-input-error :messages="$errors->get('new_password')" class="mt-2"/>
                            </div>

                            <!-- Konfirmasi Password -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <label for="confirm_new_password" class="block w-full md:w-1/2 mb-2 text-base font-medium text-gray-900 dark:text-white">Konfirmasi Password</label>
                                    <input type="password" wire:model="confirm_new_password" name="confirm_new_password" id="confirm_new_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full md:w-1/2 p-2.5 dark:bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Konfirmasi Password Baru" required autofocus>
                                </div>
                                <x-input-error :messages="$errors->get('confirm_new_password')" class="mt-2"/>
                            </div>

                            <!-- Change Password Button -->
                            <div class="mb-2">
                                <div class="flex flex-col md:flex-row justify-between items-center">
                                    <div class="hidden md:block w-full md:w-1/2"></div>
                                    <button type="submit" class="waves-effect waves-light w-full md:w-1/2 md:hidden rounded-xl btn btn-primary text-center">Ganti Password</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
