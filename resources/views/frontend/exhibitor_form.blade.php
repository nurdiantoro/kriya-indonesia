@include('frontend.template.header')

@if (session('success'))
    <script>
        const suksesAlert = Swal.mixin({
            customClass: {
                confirmButton: "px-8 py-2 text-white bg-warna-01/80 hover:bg-warna-01/100 focus:outline-none rounded m-2",
            },
            buttonsStyling: false
        });
        suksesAlert.fire({
            title: "Sukses!",
            text: "Data Exhibitor berhasil dikirim!",
            icon: "success"
        });
    </script>
@endif

<div class="py-40 px-4 md:px-40">
    <h1 class="text-center font-bold text-4xl text-warna-01">Exhibitor Form</h1>
    <p class="text-center md:w-1/2 block mx-auto mb-8">10 - 14 JULI 2024
        Pameran “Kriya Indonesia 2024” menampilkan keaneka-ragaman produk kriya berbasis sumber daya alam dan budaya
        Nusantara sebagai keunggulan dan keunikan yang semakin dicari dan dicinta oleh masyarakat dari dalam dan luar
        negeri. Paduan kreatifitas dan inovasi dengan sentuhan budaya dan nuansa etnik dari setiap kategori produk kriya
        berpotensi merebut ceruk pasar lokal dan global.</p>

    <div class="flex justify-center">
        <a href="{{ asset('pdf/Sales Kit Kriya Indonesia.pdf') }}" download="Sales Kit Kriya Indonesia.pdf"
            class="rounded bg-warna-01 text-white px-4 py-2 mx-auto inline-block">Download Sales Kit Kriya Indonesia</a>
    </div>

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
        {{-- <div>
            <label for="handphone" class="mb-1 block">Nomor Handphone <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="handphone" name="handphone">
        </div> --}}
        <div>
            <label for="kategori" class="mb-1 block">Jenis Produk <small class="text-red-500">*</small></label>
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="kategori" name="kategori">
        </div>
        <div>
            <label for="bidang_usaha" class="mb-1 block">Bidang Usaha <small class="text-red-700">*</small></label>
            <select required
                class="border rounded-md px-2 py-2 w-full bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="bidang_usaha" name="bidang_usaha">
                <option value="" disabled selected hidden>...</option>
                <option value="Eksporter">Eksporter</option>
                <option value="Produsen">Produsen</option>
                <option value="Distributor">Distributor</option>
                <option value="Pemerintahan">Pemerintahan</option>
                <option value="Lain-Lain">Lain-Lain</option>
            </select>
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
