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
        <link rel="preconnect" href="https://fonts.bunny.net" >
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Vendors Style-->
        <link rel="stylesheet" href="{{ asset('css/vendors_css.css')}}" >

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

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js" defer></script>
    <script src="{{ asset('js/vendors.min.js') }}" defer></script>
    <script src="{{ asset('js/pages/chat-popup.js') }}" defer></script>
    <script src="{{ asset('assets/icons/feather-icons/feather.min.js') }}" defer></script>
    <script src="{{ asset('assets/vendor_components/datatable/datatables.js') }}" defer></script>
    <script src="{{ asset('assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}" defer></script>
    <script src="{{ asset('assets/vendor_components/fullcalendar-6/dist/index.global.js') }}" defer></script>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <script src="{{ asset('js/tailwind.min.js') }}" defer></script>
    <script src="{{ asset('js/demo.js') }}" defer></script>
    <script src="{{ asset('js/template.js') }}" defer></script>
    <script src="{{ asset('js/pages/dashboard.js') }}" defer></script>
    <script src="{{ asset('js/pages/app-contact.js') }}" defer></script>
    <script>
        feather.replace();
    </script>
</body>
</html>
