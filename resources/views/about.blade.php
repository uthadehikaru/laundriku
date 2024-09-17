@extends('layouts.web')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Tentang Laundriku</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Laundriku adalah layanan laundry terpercaya yang berkomitmen untuk memberikan pelayanan terbaik kepada pelanggan kami.</p>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/3 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <svg class="w-20 h-20 mb-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                    </svg>
                    <div class="w-full">
                        <h2 class="title-font font-medium text-lg text-gray-900">Kualitas Terbaik</h2>
                        <p class="mb-4">Kami menggunakan peralatan dan bahan pembersih berkualitas tinggi untuk memastikan pakaian Anda bersih dan terawat dengan baik.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <svg class="w-20 h-20 mb-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="w-full">
                        <h2 class="title-font font-medium text-lg text-gray-900">Layanan Cepat</h2>
                        <p class="mb-4">Dengan tim yang berpengalaman, kami menawarkan layanan cepat tanpa mengorbankan kualitas.</p>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3 md:w-1/2">
                <div class="h-full flex flex-col items-center text-center">
                    <svg class="w-20 h-20 mb-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div class="w-full">
                        <h2 class="title-font font-medium text-lg text-gray-900">Harga Terjangkau</h2>
                        <p class="mb-4">Kami menawarkan harga yang kompetitif untuk semua jenis layanan laundry kami.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-20">
            <h2 class="text-xs text-yellow-500 tracking-widest font-medium title-font mb-1">LOKASI KAMI</h2>
            <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900">Kunjungi Laundriku</h1>
        </div>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Alamat</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Jl. Laundry Bersih No. 123, Kota Bersih, 12345</p>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Kontak</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Telepon: (021) 123-4567</p>
                        <p class="leading-relaxed text-base">Email: info@laundriku.com</p>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="flex rounded-lg h-full bg-gray-100 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-yellow-500 text-white flex-shrink-0">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                <circle cx="12" cy="5" r="3"></circle>
                                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
                            </svg>
                        </div>
                        <h2 class="text-gray-900 text-lg title-font font-medium">Jam Operasional</h2>
                    </div>
                    <div class="flex-grow">
                        <p class="leading-relaxed text-base">Senin - Jumat: 08.00 - 20.00</p>
                        <p class="leading-relaxed text-base">Sabtu - Minggu: 09.00 - 18.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
