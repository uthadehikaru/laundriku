<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  data-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name' )}}</title>

        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{ asset('laundriku.webp') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
        <script src="https://cdn.tailwindcss.com"></script>

        
    </head>
    <body>
        <header class="text-gray-600 body-font">
            <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <img src="{{ asset('laundriku.webp') }}" alt="Logo" class="w-10 h-10">
                <a href="{{ url('/') }}" class="ml-3 text-xl">{{ config('app.name' )}}</a>
                </a>
                <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    @auth
                    <a href="{{ route('dashboard') }}" class="mr-5 hover:text-gray-900">Dashboard</a>
                    <a href="{{ route('order') }}" class="mr-5 hover:text-gray-900">Pesanan</a>
                    @endauth
                    @guest
                    <a href="{{ url('about') }}" class="mr-5 hover:text-gray-900">Tentang Kami</a>
                    @endguest
                </nav>
                @guest
                <a href="{{ route('login') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                >Masuk
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
                @endguest
                @auth
                <a href="{{ route('logout') }}" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"
                >Keluar
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
                </a>
                @endauth
            </div>
        </header>
        @yield('content')
        <footer class="text-gray-600 body-font">
            <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                <img src="{{ asset('laundriku.webp') }}" alt="Logo" class="w-10 h-10">
                <span class="ml-3 text-xl">{{ config('app.name' )}}</span>
                <span class="ml-3 text-sm">© {{ date('Y') }}</span>
                </a>
            </div>
            </footer>
    </body>
</html>
