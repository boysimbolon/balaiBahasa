@section('title', $title)
<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="text-center mb-5">
        <h1 class="font-bold text-2xl md:text-2xl mb-1">Universitas Advent Indonesia</h1>
        <h3 class="font-light text-lg md:text-xl mb-1">Balai Bahasa</h3>
        @if (session()->has('message'))
            <div class="w-full bg-green-600 p-2 rounded text-white">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <form wire:submit.prevent="Login"> <!-- Gunakan wire:submit.prevent -->
        @csrf
        <!-- NIM / No Peserta -->
        <div>
            <label for="no_Peserta" class="block font-medium text-sm text-gray-700">No Peserta</label>
            <x-text-input wire:model="no_Peserta" id="no_Peserta" class="block mt-1 w-full" type="text" name="no_Peserta" placeholder="NIM / No Peserta" inputmode="numeric" required autofocus autocomplete="off" />
            <x-input-error :messages="$errors->get('no_Peserta')" class="mt-2" />
        </div>

        <!-- PIN -->
        <div class="mt-4">
            <label for="pin" class="block font-medium text-sm text-gray-700">Password</label>
            <x-text-input wire:model="pin" id="pin" class="block mt-1 w-full" type="password" name="pin" placeholder="Password" required autocomplete="current-password" />
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
        <div class="flex flex-col items-start gap-2 mt-8">
            @if (Route::has('pin.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('pin.request') }}" wire:navigate>
                    {{ __('Forgot your PIN?') }}
                </a>
            @endif

            <x-primary-button class="w-full py-3">
                {{ __('Login') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Registration -->
    <div class="text-sm text-center mt-4">
        <p>Anda belum mendaftar? Silahkan <a class="text-blue-500 underline" href="{{ route('register') }}" wire:navigate>{{ __('Register') }}</a></p>
    </div>
</div>
