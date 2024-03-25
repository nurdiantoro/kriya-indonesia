@include('frontend.template.header')

@if (session('success'))
    <div class="bottom-0 left-0 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-4 rounded-md border border-gray-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-green-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentcolor"
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <span class="text-green-700">Data Exhibitor berhasil dikirim!</span>
            <button id="close_allert" class="ml-2" onclick="closeAlert()">
                <svg class="inline w-4 h-6 text-gray-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif

<div class="py-40 px-4 md:px-40">
    <h1 class="text-center font-bold text-4xl text-warna-01">Exhibitor Form</h1>
    <p class="text-center md:w-1/2 block mx-auto">10 - 14 JULI 2024
        Pameraan “Kriya Indonesia 2024” menampilkan keaneka-ragaman produk kriya berbasis sumber daya alam dan budaya
        Nusantara sebagai keunggulan dan keunikan yang semakin dicari dan dicinta oleh masyarakat dari dalam dan luar
        negeri. Paduan kreatifitas dan inovasi dengan sentuhan budaya dan nuansa etnik dari setiap kategori produk kriya
        berpotensi merebut ceruk pasar lokal dan global.</p>

    <form action="{{ url('input_exhibitor') }}" method="POST" class="mt-20 md:w-1/2  mx-auto flex flex-col gap-6">
        @csrf
        <div>
            <label for="perusahaan" class="mb-1 block">Perusahaan/Instansi <small class="text-red-500">*</small>
            </label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="perusahaan" name="perusahaan">
        </div>
        <div>
            <label for="alamat" class="mb-1 block">Alamat Kantor <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="alamat" name="alamat">
        </div>
        <div>
            <label for="telp_kantor" class="mb-1 block">Telepon Kantor <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="telp_kantor" name="telp_kantor">
        </div>
        <div>
            <label for="email" class="mb-1 block">E-mail <small class="text-red-500">*</small></label>
            <input required type="email"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="email" name="email">
        </div>
        <div>
            <label for="website" class="mb-1 block">Website</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="website" name="website">
        </div>
        <div>
            <label for="pic" class="mb-1 block">Penanggungjawab/PIC <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="pic" name="pic">
        </div>
        <div>
            <label for="jabatan" class="mb-1 block">Jabatan <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="jabatan" name="jabatan">
        </div>
        <div>
            <label for="handphone" class="mb-1 block">Nomor Handphone <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="handphone" name="handphone">
        </div>
        <div>
            <label for="kategori" class="mb-1 block">Jenis Produk <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="kategori" name="kategori">
        </div>
        <div class="flex flex-row gap-2 items-start">
            <input required type="checkbox" name="agreement" id="agreement" class="h-16 w-16">
            <label for="agreement" class="mb-1 block">Dengan mengisi formulir diatas maka saya menyatakan berminat
                dengan pameran KRIYA INDONESIA 2024, yang selanjutnya dapat dikirimkan infomasi terkait pendaftaran saya
                melalui email dan nomor telepon yang tertera</label>
        </div>
        <div class="mx-auto">
            <button type="submit" class="bg-warna-01 rounded px-8 py-2 text-white">Kirim</button>
        </div>
    </form>
</div>

@include('frontend.template.footer')
