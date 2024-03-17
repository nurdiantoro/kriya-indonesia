@include('frontend.template.header')

<div class="h-screen w-full bg-cover flex justify-center items-center"
    style="background-image: url('{{ asset('images/Header Homepage-01.png') }}')">
    <div class=" w-1/2 z-10">
        <h2 class="text-center font-bold text-4xl text-white">WELCOME TO</h2>
        <h1 class="text-center font-bold text-5xl text-white">KRIYA INDONESIA 2024</h1>
        <h2 class="text-center font-bold text-4xl text-white">10 - 14 Juli 2024</h2>
        <p class="text-center text-white mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
            accumsan
            neque eu
            neque volutpat, vel
            cursus tortor hendrerit. Aliquam at mauris sed erat fringilla dignissim ut ut orci. Nam sollicitudin
            sapien ligula, a congue est dignissim quis. Sed id placerat ipsum.</p>
        <div class="flex flex-row items-center justify-center mt-4 gap-3">
            <a href="http://" class="bg-warna-01 rounded-md px-4 py-2 text-white font-bold">Register</a>
            <span class="text-white">or</span>
            <a href="http://" class="bg-white rounded-md px-4 py-2 text-warna-01 font-bold">Become Exhibitor</a>
        </div>
    </div>
    <img src="{{ asset('images/Divider-01.png') }}" class="absolute -bottom-10 w-full z-0">
</div>

<div class="px-40">
    <div class="my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl">Product Gallery</h3>
    </div>
    <div class="my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-10">Our Highlight Exhibitors</h3>
        <div class="flex flex-row flex-wrap gap-20 justify-center">
            <div class="h-36">
                <img src="{{ asset('images/Sample Logo/Asset 1.png') }}" alt="logo exhibitor" class="h-full">
            </div>
            <div class="h-36">
                <img src="{{ asset('images/Sample Logo/Asset 2.png') }}" alt="logo exhibitor" class="h-full">
            </div>
            <div class="h-36">
                <img src="{{ asset('images/Sample Logo/Asset 3.png') }}" alt="logo exhibitor" class="h-full">
            </div>
            <div class="h-36">
                <img src="{{ asset('images/Sample Logo/Asset 4.png') }}" alt="logo exhibitor" class="h-full">
            </div>
        </div>
    </div>
    <div class="my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-20">Don’t Miss Our Activities</h3>
        <div class="grid grid-cols-2">
            <div class="flex flex-col m-auto text-center w-2/3 gap-2">
                <span class="font-bold text-2xl text-warna-01">Visit our social media</span>
                <div class="grid grid-cols-2 gap-4">
                    <a href="#"
                        class="bg-warna-01 rounded-lg px-4 py-2 text-white flex flex-row gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-white h-4 inline">
                            <path fill="currentcolor"
                                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                        </svg>
                        Kriya Indonesia
                    </a>
                    <a href="#"
                        class="bg-warna-01 rounded-lg px-4 py-2 text-white flex flex-row gap-1 items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="text-white h-4 inline">
                            <path fill="currentcolor"
                                d="M448 209.9a210.1 210.1 0 0 1 -122.8-39.3V349.4A162.6 162.6 0 1 1 185 188.3V278.2a74.6 74.6 0 1 0 52.2 71.2V0l88 0a121.2 121.2 0 0 0 1.9 22.2h0A122.2 122.2 0 0 0 381 102.4a121.4 121.4 0 0 0 67 20.1z" />
                        </svg>
                        <span>Kriya Indonesia</span>
                    </a>
                </div>
                <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit in fugiat quidem. Aut qui
                    aperiam culpa ab illum sunt, repellat vero sit pariatur aliquam eos accusantium ea. Quam, provident
                    natus?</span>
            </div>
            <div class="w-2/3 m-auto">
                <img src="{{ asset('images/Instagram.png') }}" alt="banner instagram" class="w-full">
            </div>
        </div>
    </div>
    <div class="my-80">
        <h3 class="text-center font-bold text-warna-01 text-3xl mb-20">Event Location</h3>
        <div class="grid grid-cols-2">
            <iframe class="m-auto w-2/3 h-60 rounded-2xl shadow-md"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6670.612586551879!2d106.80250351672368!3d-6.214842126971439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f747a457c4bf%3A0xc0c1ce09bc5a8a3f!2sJCC!5e0!3m2!1sid!2sid!4v1710604729545!5m2!1sid!2sid"
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="m-auto flex flex-col w-2/3 gap-2">
                <span class="font-bold text-2xl text-warna-01">Assembly Hall</br>Jakarta Convention Center</span>
                <span>Jl. Gatot Subroto, Senayan, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota
                    Jakarta 10270</span>
                <a href="https://maps.app.goo.gl/bFpfF4S8tczWhu5f7"
                    class="bg-warna-01 rounded-lg px-4 py-2 text-white mr-auto">Get Direction</a>
            </div>
        </div>
    </div>
</div>
<div class="relative pt-80 pb-32 bg-warna-04 px-40">
    <img src="{{ asset('images/Divider-02.png') }}" class="w-full absolute top-0 left-0">
    <h3 class="text-center font-bold text-warna-01 text-3xl mb-20">Kriya Indonesia</h3>
    <table class="mx-auto text-center mb-20">
        <tr>
            <td class="px-20">Hosted By :</td>
            <td class="px-20">Organized By :</td>
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
    <table class="mx-auto text-center">
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
        <tr class="">
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
@include('frontend.template.footer')
