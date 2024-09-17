@extends('layouts.web')
@section('content')
<!-- start hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero"
                src="{{ asset('laundriku.webp') }}">
        </div>
        <div
            class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Cuci Pakaianmu Bersama Kami
            </h1>
            <p class="mb-8 leading-relaxed">Kami menyediakan layanan cuci pakaian bersama kami dengan harga terjangkau
                dan berkualitas.</p>
            <div class="flex justify-center">
                <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
                    class="inline-flex text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">Order
                    Sekarang via WA</a>
            </div>
        </div>
    </div>
</section>
<!-- end hero -->
<!-- begin feature -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Layanan Kami
            <br class="hidden sm:block">
        </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Kualitas Terjamin</h2>
                    <p class="leading-relaxed text-base">Kami menggunakan deterjen berkualitas tinggi dan mesin cuci modern untuk memastikan pakaian Anda bersih, wangi, dan terawat dengan baik.</p>
                    <a class="mt-3 text-yellow-500 inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Layanan Cepat</h2>
                    <p class="leading-relaxed text-base">Kami menawarkan layanan cuci kilat dengan waktu penyelesaian hanya dalam 24 jam, sehingga Anda bisa mendapatkan pakaian bersih dengan cepat.</p>
                    <a class="mt-3 text-yellow-500 inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-yellow-100 text-yellow-500 mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Harga Terjangkau</h2>
                    <p class="leading-relaxed text-base">Kami menawarkan harga yang kompetitif dan terjangkau untuk semua jenis layanan cuci, dengan berbagai paket yang bisa disesuaikan dengan kebutuhan Anda.</p>
                    <a class="mt-3 text-yellow-500 inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end feature -->
<!-- start contact -->
<section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"
            src="{{ config('app.map_embed_url') }}"
            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
        <div
            class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Hubungi Kami</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Kami siap membantu Anda dengan layanan laundry terbaik. Silakan hubungi kami untuk informasi lebih lanjut.</p>
            <a href="https://wa.me/{{ config('app.whatsapp_number') }}" target="_blank"
                class="text-white bg-yellow-500 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-600 rounded text-lg">WA {{ config('app.whatsapp_number') }}</a>
            <p class="text-xs text-gray-500 mt-3">Kami akan merespons pesan Anda secepat mungkin. Terima kasih atas kepercayaan Anda.</p>
        </div>
    </div>
</section>
<!-- end contact -->
@endsection
