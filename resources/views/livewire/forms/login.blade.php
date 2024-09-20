<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />



    <form wire:submit.prevent="login"> <!-- Gunakan wire:submit.prevent -->
        <div class="text-center mb-5">
            <h1 class="font-bold text-xl md:text-2xl mb-1">Universitas Advent Indonesia</h1>
            <h3 class="font-light text-lg md:text-xl">Balai Bahasa</h3>
            @if (session()->has('message'))
                <div class="w-full bg-green-700 py-2 rounded">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <!-- NIM / No Peserta -->
        <div>
            <x-input-label for="no_Peserta" :value="__('No Peserta')" />
            <x-text-input wire:model="no_Peserta" id="no_Peserta" class="block mt-1 w-full" type="text" name="no_Peserta" placeholder="NIM / No Peserta" inputmode="numeric" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('no_Peserta')" class="mt-2" />
        </div>

        <!-- PIN -->
        <div class="mt-4">
            <x-input-label for="pin" :value="__('PIN')" />
            <x-text-input wire:model="pin" id="pin" class="block mt-1 w-full" type="password" name="pin" placeholder="PIN" required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('pin')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember" class="inline-flex items-center">
                <input wire:model="remember" id="remember" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <!-- Forgot Password & Log In -->
        <div class="flex flex-col items-start gap-2 mt-4">
            @if (Route::has('pin.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('pin.request') }}" wire:navigate>
                    {{ __('Forgot your PIN?') }}
                </a>
            @endif

            <x-primary-button class="w-full">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Registration -->
    <div class="text-sm text-center mt-4">
        <p>Anda belum mendaftar? Silahkan <a class="text-blue-500 underline" href="{{ route('register') }}" wire:navigate>{{ __('Register') }}</a></p>
    </div>
</div>
