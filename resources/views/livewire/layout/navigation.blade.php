<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<aside id="sidebar" class="bg-primary w-60 h-screen pt-20 flex flex-col fixed top-0 bottom-0 -left-60 transition duration-700 ease-in-out">
    <!-- User Photo -->
    <div class="mt-5 w-60 h-fit flex flex-col items-center gap-2">
        <div class="w-28">
            <img src="https://picsum.photos/100" alt="" class="size-28 rounded-xl">
        </div>
        <h1 class="text-xl font-bold">John Doe</h1>
    </div>

    <!-- Navigation -->
    <ul class="mt-5 h-full flex flex-col justify-between">
        <div>
            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}">
                <li class="flex items-center gap-2 h-14 px-5 hover:bg-secondary hover:text-black {{ Route::is('dashboard') ? 'bg-secondary text-black' : 'text-white' }}">
                    <div class="flex items-center gap-2" wire:navigate>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-grid" viewBox="0 0 16 16">
                                <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                            </svg>
                        </div>
                        <p class="text-lg">Dashboard</p>
                    </div>
                </li>
            </a>

            <!-- Profile -->
            <li class="flex items-center justify-between h-14 px-5 hover:bg-secondary hover:text-black  {{ Route::is('biodata') ? 'bg-secondary text-black' : 'text-white' }}">
                <div class="flex items-center gap-2 w-fit">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                    </div>
                    <p class="text-lg">Profile</p>
                </div>
                <svg onclick="openProfileDropdown()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-down-fill hover:cursor-pointer" viewBox="0 0 16 16" id="caret1">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </li>

            <!-- Profile Dropdown -->
            <ul class="hidden" id="profileDropdown">
                <!-- Biodata -->
                <a href="{{ route('biodata') }}">
                    <li class="flex items-center justify-between h-14 px-5 text-white hover:bg-secondary hover:text-black">
                        <div class="flex items-center gap-2 w-fit">
                            <div class="w-6"></div>
                            <p class="text-lg">Biodata</p>
                        </div>
                    </li>
                </a>

                <!-- Change Password -->
                <a href="">
                    <li class="flex items-center justify-between h-14 px-5 text-white hover:bg-secondary hover:text-black">
                        <div class="flex items-center gap-2 w-fit">
                            <div class="w-6"></div>
                            <p class="text-lg">Ganti Password</p>
                        </div>
                    </li>
                </a>
            </ul>

            <!-- Type Test -->
            <li class="flex items-center justify-between h-14 px-5 text-white hover:bg-secondary hover:text-black">
                <div class="flex items-center gap-2">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                    </div>
                    <p class="text-lg text-nowrap">Pilih Jenis Tes</p>
                </div>
                <svg onclick="openTypeDropdown()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-caret-down-fill hover:cursor-pointer" viewBox="0 0 16 16" id="caret2">
                    <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                </svg>
            </li>

            <!-- Type Test Dropdown -->
            <ul class="hidden" id="typeDropdown">
                <!-- E3 -->
                <a href="">
                    <li class="flex items-center justify-between h-14 px-5 text-white hover:bg-secondary hover:text-black">
                        <div class="flex items-center gap-2 w-fit">
                            <div class="w-6"></div>
                            <p class="text-lg">E3</p>
                        </div>
                    </li>
                </a>

                <!-- TOEFL -->
                <a href="">
                    <li class="flex items-center justify-between h-14 px-5 text-white hover:bg-secondary hover:text-black">
                        <div class="flex items-center gap-2 w-fit">
                            <div class="w-6"></div>
                            <p class="text-lg">TOEFL</p>
                        </div>
                    </li>
                </a>
            </ul>

            <!-- History -->
            <a href="">
                <li class="flex items-center h-14 px-5 text-white hover:bg-secondary hover:text-black">
                    <div class="flex items-center gap-2">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                            </svg>
                        </div>
                        <p class="text-lg">History</p>
                    </div>
                </li>
            </a>
        </div>

        <!-- Log Out -->
        <li class="flex items-center h-14 px-5 text-white hover:bg-secondary hover:text-black hover:cursor-pointer" wire:click="logout">
            <div class="flex items-center gap-2 w-fit">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="black" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                    </svg>
                </div>
                <p class="text-lg text-nowrap">Log Out</p>
            </div>
        </li>
    </ul>
</aside>
