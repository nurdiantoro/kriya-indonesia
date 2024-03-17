@include('frontend.template.header')

@if (session('success'))
    <div class="bottom-0 left-0 p-4 fixed" id="allert">
        <div class="bg-warna-04 shadow-md p-4 rounded-md border border-gray-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-green-700" id="rounded check">
                <path fill="currentcolor"
                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />

            </svg>
            <span>Data Exhibitor berhasil dikirim!</span>
            <button id="close_allert">
                <svg class="inline w-4 h-4 text-green-700" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif

<div class="py-40 px-40">
    <h1 class="text-center font-bold text-4xl text-warna-01">Exhibitor Form</h1>
    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, sequi. Voluptatum odio unde
        velit eum
        necessitatibus iste temporibus sed reiciendis corrupti. Molestiae ab corporis aut incidunt necessitatibus unde
        enim fuga.</p>

    <form action="{{ url('input_exhibitor') }}" class="mt-20 w-1/2  mx-auto flex flex-col gap-6" method="POST">
        @csrf
        <div>
            <label for="perusahaan" class="mb-1 block">Perusahaan/Instansi</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="perusahaan" name="perusahaan">
        </div>
        <div>
            <label for="alamat" class="mb-1 block">Alamat Kantor</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="alamat" name="alamat">
        </div>
        <div>
            <label for="telp_kantor" class="mb-1 block">Telepon Kantor</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="telp_kantor" name="telp_kantor">
        </div>
        <div>
            <label for="email" class="mb-1 block">E-mail</label>
            <input type="email"
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
            <label for="pic" class="mb-1 block">Penanggungjawab/PIC</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="pic" name="pic">
        </div>
        <div>
            <label for="jabatan" class="mb-1 block">Jabatan</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="jabatan" name="jabatan">
        </div>
        <div>
            <label for="handphone" class="mb-1 block">Nomor Handphone</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="handphone" name="handphone">
        </div>
        <div>
            <label for="kategori" class="mb-1 block">Jenis Produk</label>
            <input type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="kategori" name="kategori">
        </div>
        <div class="flex flex-row gap-2 items-start">
            <input type="checkbox" name="agreement" id="agreement" class="h-16 w-16">
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
