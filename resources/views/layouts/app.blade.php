<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - Balai Bahasa UNAI</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}

    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{ asset('css/vendors_css.css')}}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css')}}">

    <!-- Style-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('css/skin_color.css')}}">
    <link rel="stylesheet" href="{{ asset('css/custom.css')}}">
</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed-manu">
    <div class="wrapper">
        <header class="main-header">
            <livewire:layout.logo />
            <!-- Header Navbar -->
            <livewire:layout.navbar />
        </header>

        <livewire:layout.navigation />

        <div class="content-wrapper">
            <div>
                <section class="content">
                    {{ $slot }}
                </section>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script>

    <!-- Vendor JS -->
    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/pages/chat-popup.js') }}"></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar-6/dist/index.global.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('js/pages/app-contact.js') }}"></script>

    <script>
        feather.replace();
    </script>
{{--<!-- Navbar -->--}}
{{--<nav class="fixed h-20 w-full md:w-screen drop-shadow-lg bg-white flex items-center z-20">--}}
{{--    <!-- Menu -->--}}
{{--    <div id="menuIcon" class="w-[72px] h-full flex items-center justify-center bg-primary">--}}
{{--        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" class="bi bi-list hover:cursor-pointer" viewBox="0 0 16 16">--}}
{{--            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>--}}
{{--        </svg>--}}
{{--    </div>--}}

{{--    <!-- Navbar Heading -->--}}
{{--    <div class="ml-5 flex items-center gap-3">--}}
{{--        <a href="{{ route('dashboard-mhs') }}" class="w-10 h-10">--}}
{{--            <img src="{{ asset('Logo-Unai.png') }}" alt="Unai Logo" class="aspect-square">--}}
{{--        </a>--}}
{{--        <a href="{{ route('dashboard-mhs') }}" class="text-2xl font-semibold">Balai Bahasa UNAI</a>--}}
{{--    </div>--}}
{{--</nav>--}}

{{--<div class="min-h-screen flex">--}}
{{--    <!-- Sidebar -->--}}
{{--    <livewire:layout.navigation />--}}

{{--    <!-- Page Content -->--}}
{{--    <main class="pt-20 bg-neutral-100 min-h-screen transition-spacing duration-700 ease-in-out z-0 {{ Route::is('history-mhs') || Route::is('e3-schedule-mhs') || Route::is('toefl-schedule-mhs') || Route::is('toefl-schedule-user') || Route::is('history-user') ? 'w-fit md:w-full' : 'w-full' }}" id="mainContent">--}}
{{--        {{ $slot }}--}}
{{--    </main>--}}
{{--</div>--}}

{{--<script>--}}
{{--    const menuIcon = document.getElementById('menuIcon');--}}
{{--    const sidebar = document.getElementById('sidebar');--}}
{{--    const mainContent = document.getElementById('mainContent');--}}
{{--    const profileDropdown = document.getElementById('profileDropdown');--}}


{{--    menuIcon.addEventListener('click', function () {--}}
{{--        sidebar.classList.toggle('translate-x-full');--}}
{{--        mainContent.classList.toggle('md:ml-60');--}}
{{--    });--}}

{{--    function openProfileDropdown() {--}}
{{--        document.getElementById('profileDropdown').classList.toggle('hidden');--}}
{{--        document.getElementById('caret1').classList.toggle('rotate-180');--}}
{{--    }--}}

{{--    function openTypeDropdown() {--}}
{{--        document.getElementById('typeDropdown').classList.toggle('hidden');--}}
{{--        document.getElementById('caret2').classList.toggle('rotate-180');--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>
