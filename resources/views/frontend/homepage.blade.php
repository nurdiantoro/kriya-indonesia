@include('frontend.template.header')

{{-- Header --}}
<div class="md:h-screen w-full bg-cover bg-center flex justify-center items-center relative"
    style="background-image: url('{{ asset('images/Header Homepage-01.jpg') }}')">
    <div class="md:w-1/2 z-10 flex flex-col gap-4 pt-40 mb-20">
        <img src="{{ asset('images/Logo Kryia-03.png') }}" alt="logo kriya indonesia" class="w-40 h-auto mx-auto">
        <div>
            <h2 class="text-center font-bold text-3xl md:text-4xl text-white">SELAMAT DATANG DI</h2>
            <h1 class="text-center font-bold text-4xl md:text-5xl text-white">KRIYA INDONESIA 2024</h1>
            <h2 class="text-center font-bold text-3xl md:text-4xl text-white">10 - 14 JULI 2024</h2>
        </div>

        <p class=" text-justify md:text-center text-white mt-4 px-4 md:px-0">Pameran “Kriya Indonesia 2024” menampilkan
            keaneka-ragaman produk kriya berbasis sumber daya alam dan budaya Nusantara sebagai keunggulan dan keunikan
            yang semakin dicari dan dicinta oleh masyarakat dari dalam dan luar negeri. Paduan kreatifitas dan inovasi
            dengan sentuhan budaya dan nuansa etnik dari setiap kategori produk kriya berpotensi merebut ceruk pasar
            lokal dan global.</p>
        <div class="flex flex-row items-center justify-center mt-4 gap-3 ">
            <a href="{{ url('register') }}" class="bg-warna-01 rounded-md px-4 py-2 text-white font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-4 inline opacity-80">
                    <path fill="currentcolor"
                        d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                </svg>
                <span class="ml-1">Registrasi Visitor</span>
            </a>
        </div>
        <div id="countdown"
            class="text-center text-3xl md:text-4xl text-gray-700 bg-warna-05 rounded-lg mx-auto px-4 py-2 hidden flex-row flex-wrap">
        </div>
    </div>
    <img src="{{ asset('images/Divider-01.png') }}" class="absolute -bottom-2 md:-bottom-10 w-full z-0">

</div>

<div class="px-4 block md:px-40">
    <div class="mb-40 mt-10">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-10">Kategori Produk</h3>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="text-center rounded-md border border-gray-300 p-4 hover:shadow-md">
                <img src="{{ asset('images/produk-wastra.png') }}" alt="product image" class="mx-auto h-20 mb-4">
                <span class="font-bold text-gray-900 mb-2 block">Wastra</span>
                <p class="text-gray-600 text-sm">Bahan Busana Batik, Songket, Tenun, Kain Ikat, Tapis, Ulos, Endek, dan
                    Kebaya
                </p>
            </div>
            <div class="text-center rounded-md border border-gray-300 p-4 hover:shadow-md">
                <img src="{{ asset('images/produk-fashion.png') }}" alt="product image" class="mx-auto h-20 mb-4">
                <span class="font-bold text-gray-900 mb-2 block">Fashion & Leather</span>
                <p class="text-gray-600 text-sm">Produk Busana Modern Siap Pakai, Sepatu, Tas, Dompet, dan Jaket Kulit
                </p>
            </div>
            <div class="text-center rounded-md border border-gray-300 p-4 hover:shadow-md">
                <img src="{{ asset('images/produk-homeliving.png') }}" alt="product image" class="mx-auto h-20 mb-4">
                <span class="font-bold text-gray-900 mb-2 block">Homeliving & Handicraft</span>
                <p class="text-gray-600 text-sm">Perabot Rumah, Kantor dan Produk Hasil Kerajinan</p>
            </div>
            <div class="text-center rounded-md border border-gray-300 p-4 hover:shadow-md">
                <img src="{{ asset('images/produk-jewellery.png') }}" alt="product image" class="mx-auto h-20 mb-4">
                <span class="font-bold text-gray-900 mb-2 block">Jewellery & Accessories</span>
                <p class="text-gray-600 text-sm"> Perhiasan Emas, Berlian, Mutiara, Perak dan pernak-pernik.</p>
            </div>
        </div>

        <div class="text-center rounded-md border border-gray-300 p-4 hover:shadow-md md:w-[500px] mx-auto">
            <div class="grid grid-cols-2 gap-4 mb-4">
                <span class="text-gray-700 font-bold">Tempat Terbatas! Segera Daftar!</span>
                <div class="text-white bg-warna-01 rounded px-4 py-2 font-bold flex justify-center items-center">
                    <a href="{{ url('exhibitor_form') }}">Daftar</a>
                </div>
            </div>
            <div class="w-full">
                <div id="myProgress" class="w-full bg-warna-04 rounded overflow-hidden">
                    <div id="myBar" class="w-4 h-6 bg-warna-05 text-warna-01 text-right font-bold pr-2"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-40 md:my-80">
        <div class="flex flex-col gap-20 justify-center">

            <div class=" flex items-center flex-col bg-white rounded-md border border-warna-01">
                <span
                    class="font-bold text-center block w-min text-nowrap text-warna-01 bg-warna-01/10 rounded px-4 py-2">Benefit
                    Berkunjung</span>
                <div class="flex flex-wrap justify-center">
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 1.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Interaksi langsung di stand peserta pameran untuk mendapatkan informasi produk dan harga
                            terbaik
                            untuk pembelian satuan maupun jumlah banyak.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 5.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Peluang kemitraan kerjasama keagenan atau reseller produk yang prospektif untuk dipasarkan
                            lagi maupun kerjasama pengadaan bahan baku dan pendukung.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 4.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Memilih dan mendapatkan produk unggulan dari berbagai kategori produk yang dipamerkan
                            (Wastra,
                            Fashion & Leather, Home Living & Handicraft, Jewelry & Accessories).
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 3.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Kesempatan mengikuti dan berinteraksi di Side Events yang digelar paralel pameran (Workshop,
                            Demo Produk, Talkshow dan Live Music).
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 2.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Kesempatan memenangkan hadiah menarik Lucky Dip selama 5 hari pameran.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" flex items-center flex-col bg-white rounded-md border border-warna-02">
                <span
                    class="font-bold text-center block w-min text-nowrap text-warna-01 bg-warna-01/10 rounded px-4 py-2">Benefit
                    Berpameran</span>
                <div class="flex flex-wrap justify-center">
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 7.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">Promosi ragam produk terbaru
                            yang inovatif, kreatif
                            dan atraktif dengan harga khusus yang berlaku selama pameran.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 6.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Peluang mendapatkan pelanggan baru dan calon mitra usaha baru melalui interaksi langsung di
                            stand.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 3.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Kesempatan untuk mengikuti sesi demo produk guna menjelaskan cara penggunaan produk dengan
                            baik dan benar serta proses pembuatannya.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 9.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Kesempatan menjadi narasumber untuk kegiatan Workshop dan Talkshow sebagai peluang promosi
                            dan edukasi.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/5 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 8.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Kehadiran dan kepesertaan di Kriya Indonesia menjadi salah satu tolok ukur eksistensi dan
                            prestasi usaha.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" flex items-center flex-col bg-white rounded-md border border-warna-05">
                <span
                    class="font-bold text-center block w-min text-nowrap text-warna-01 bg-warna-01/10 rounded px-4 py-2">Kegiatan
                    Pendukung</span>
                <div class="flex flex-wrap justify-center">
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/3 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 1.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">Mengangkat topik spesifik di
                            4 sub-sektor industri kreatif (Wastra, Fashion & Leather, Home Living & Handicraft, Jewelry
                            & Accessories) dari aspek teknis dan operasional produksi serta pemasaran. Dilaksanakan di
                            Attention Area Assembly JCC.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/3 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 3.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Presentasi langsung untuk memperagakan penggunaan, cara pembuatan dan manfaat produk.
                            Dilaksanakan di Demo Stage.
                        </p>
                    </div>
                    <div
                        class="basis-full md:basis-1/2 lg:basis-1/3 p-4 flex flex-row md:flex-col gap-4 justify-center items-center">
                        <div class="basis-1/3 h-auto md:h-40 md:w-auto">
                            <img class="h-full w-auto mx-auto" src="{{ asset('images/benefit/Asset 9.png') }}">
                        </div>
                        <p class="basis-2/3 md:basis-0 text-sm text-center text-gray-700">
                            Menghadirkan narasumber yang kredibel dan dipandu oleh moderator serta MC untuk membahas
                            tema-tema aktual terkait ragam produk pameran.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($highlights->isNotEmpty())
        <div class="my-40 md:my-80">
            <h3 class="text-center font-bold text-warna-01 text-3xl mb-10">Peserta Pameran Unggulan</h3>
            <div class="flex flex-row flex-wrap gap-20 justify-center">
                {{-- <div class="owl-carousel"> --}}
                @foreach ($highlights as $highlight)
                    <a class="h-36" href="{{ $highlight->website }}" target="_blank">
                        <img src="{{ asset('storage/images/highlight/' . $highlight->logo) }}" alt="logo exhibitor"
                            class="max-h-40 h-auto max-w-52 w-auto my-auto">
                    </a>
                @endforeach
                {{-- </div> --}}
            </div>
        </div>
    @endif

    <div class="my-40 md:my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-10 md:mb-20">Jangan Lewatkan Aktifitas Kami</h3>
        <div class="flex flex-col lg:flex-row">
            <div class="flex flex-col flex-wrap m-auto text-center w-full lg:w-1/3 gap-2">
                <span class="font-bold text-2xl text-warna-01 md:inline-block hidden">Kunjungi media sosial kami</span>
                <div class="grid grid-cols-2 gap-4">
                    <a href="https://www.instagram.com/kriya.id2024/" target="blank"
                        class="hover:shadow hover:opacity-100 opacity-90 bg-gradient-to-45 rounded-lg px-4 py-2 text-white flex flex-row gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-white h-5 inline">
                            <path fill="currentcolor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        Kriya Indonesia
                    </a>
                    <a href="https://www.tiktok.com/@kriyaindonesia" target="blank"
                        class="hover:shadow hover:opacity-100 opacity-80 bg-[#010101] rounded-lg px-4 py-2 text-white flex flex-row gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-white h-4 inline">
                            <path fill="currentcolor"
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                        </svg>
                        <span>Kriya Indonesia</span>
                    </a>
                </div>
                <span class="text-gray-600">Jangan lewatkan momen-momen seru dan konten eksklusif kami! Kunjungi
                    halaman
                    Instagram dan TikTok kami untuk melihat lebih banyak foto, video, dan cerita di balik layar.
                    Dapatkan wawasan yang lebih dalam tentang apa yang terjadi di balik layar dan ikuti
                    perjalanan kami dalam menciptakan pengalaman yang tak terlupakan.</span>
            </div>
            <div class="lg:w-1/3 m-auto hidden lg:block">
                <img src="{{ asset('images/Instagram.png') }}" alt="banner instagram" class="w-full">
            </div>
        </div>
    </div>

    <div class="my-40 md:my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-10 md:mb-20">Lokasi Event</h3>
        <div class="grid grid-rows-2 lg:grid-rows-1 lg:grid-cols-2">
            <iframe class="m-auto w-full lg:w-2/3 h-60 rounded-2xl shadow-md"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.612586551879!2d106.80250351672368!3d-6.214842126971439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f747a457c4bf%3A0xc0c1ce09bc5a8a3f!2sJCC!5e0!3m2!1sid!2sid!4v1710604729545!5m2!1sid!2sid"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="m-auto flex flex-col lg:w-2/3 gap-2">
                <span class="font-bold text-2xl text-warna-01">Assembly Hall</br>Jakarta Convention Center</span>
                <span class="text-gray-700">Jl. Gatot Subroto, Senayan, Kecamatan Tanah Abang, Kota Jakarta Pusat,
                    Daerah Khusus Ibukota
                    Jakarta 10270</span>
                <a href="https://maps.app.goo.gl/bFpfF4S8tczWhu5f7" target="blank"
                    class="bg-warna-01 rounded-lg px-4 py-2 text-white mr-auto">Buka di Maps</a>
            </div>
        </div>
    </div>
</div>

{{-- Footer & Logo --}}
<div class="relative pt-80 md:pb-32 bg-warna-04 block md:px-40">
    <img src="{{ asset('images/Divider-02.png') }}" class="w-full absolute top-0 left-0 hidden md:block">
    <img src="{{ asset('images/Divider-02-mobile.png') }}" class="w-full absolute top-0 left-0 md:hidden">
    <h3 class="text-center font-bold text-warna-01 text-3xl mb-20">Kriya Indonesia</h3>
    <table class="mx-auto text-center mb-20">
        <tr>
            <td class="px-10 md:px-20">Hosted By :</td>
            <td class="px-10 md:px-20">Organized By :</td>
        </tr>
        <tr class="">
            <td><img class="h-auto w-auto max-w-32 max-h-32 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo YRKI.png') }}" alt="Logo YRKI">
            </td>
            <td><img class="h-auto w-auto max-w-32 max-h-32 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo Debindo.png') }}" alt="Logo Debindo"></td>
        </tr>
    </table>

    <span class="text-center block mb-6">Supported By :</span>

    <div class="flex flex-row flex-wrap justify-center px-4 text-center lg:hidden">
        <div class="basis-1/2 px-2 my-4 lg:basis-1/5">
            <img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                src="{{ asset('images/Logo Supported/Logo Kemenperin.png') }}" alt="Logo YRKI">
            <span class="text-[0.6rem] block lg:px-4">Ministry of INDUSTRY REPUBLIC OF INDONESIA</span>
        </div>
        <div class="basis-1/2 px-2 my-4 lg:basis-1/5">
            <img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                src="{{ asset('images/Logo Supported/Logo Kemendag.png') }}" alt="Logo YRKI">
            <span class="text-[0.6rem] block lg:px-4">Ministry of Trade REPUBLIC OF INDONESIA</span>
        </div>
        <div class="basis-1/2 px-2 my-4 lg:basis-1/5">
            <img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                src="{{ asset('images/Logo Supported/Logo KemenkopUKM.png') }}" alt="Logo YRKI">
            <span class="text-[0.6rem] block lg:px-4">Ministry of Tourism and Creative Economy REPUBLIC OF
                INDONESIA</span>
        </div>
        <div class="basis-1/2 px-2 my-4 lg:basis-1/5">
            <img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                src="{{ asset('images/Logo Supported/Logo Kemenparekraf.png') }}" alt="Logo YRKI">
            <span class="text-[0.6rem] block lg:px-4">Ministry of Cooperatives and Small and Medium
                Enterprises
                REPUBLIC OF
                INDONESIA</span>
        </div>
        <div class="basis-1/2 px-2 my-4 lg:basis-1/5">
            <img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                src="{{ asset('images/Logo Supported/Logo Kemen BUMN.png') }}" alt="Logo YRKI">
            <span class="text-[0.6rem] block lg:px-4">Ministry OF STATE-OWNED ENTERPRISES REPUBLIC OF
                INDONESIA</span>
        </div>
    </div>
    <table class="mx-auto text-center lg:block hidden">
        <tr>
            <td class="w-1/5"><img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo Kemenperin.png') }}" alt="Logo YRKI"></td>
            <td class="w-1/5"><img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo Kemendag.png') }}" alt="Logo YRKI"></td>
            <td class="w-1/5"><img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo KemenkopUKM.png') }}" alt="Logo YRKI"></td>
            <td class="w-1/5"><img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo Kemenparekraf.png') }}" alt="Logo YRKI"></td>
            <td class="w-1/5"><img class="h-auto w-auto max-w-24 max-h-20 mx-auto"
                    src="{{ asset('images/Logo Supported/Logo Kemen BUMN.png') }}" alt="Logo YRKI"></td>
        </tr>
        <tr class="uppercase">
            <td class="text-[0.6rem] px-4">Ministry of INDUSTRY REPUBLIC OF INDONESIA</td>
            <td class="text-[0.6rem] px-4">Ministry of Trade REPUBLIC OF INDONESIA</td>
            <td class="text-[0.6rem] px-4">Ministry of Tourism and Creative Economy REPUBLIC OF INDONESIA</td>
            <td class="text-[0.6rem] px-4">Ministry of Cooperatives and Small and Medium Enterprises REPUBLIC OF
                INDONESIA
            </td>
            <td class="text-[0.6rem] px-4">Ministry OF STATE-OWNED ENTERPRISES REPUBLIC OF INDONESIA</td>
        </tr>
    </table>
</div>

{{-- Tombol Daftar Sekarang di Mobile --}}
<div class="fixed md:hidden bottom-0 left-1/2 -translate-x-1/2 z-50 flex bg-gray-900/80 w-full p-2">
    <a href="{{ url('exhibitor_form') }}"
        class="bg-warna-01 border-2 border-warna-05 rounded-md text-white shadow-md px-4 py-2 text-center inline-block mx-auto">
        <span>Daftar Sekarang</span>
    </a>
</div>
<div class="md:pb-0 pb-20 bg-warna-04">
    @include('frontend.template.footer')
</div>
