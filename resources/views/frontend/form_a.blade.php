<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('images/Logo Kryia-02.png') }}">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>

    <div class="bg-gray-400 flex flex-col justify-center items-center bg-cover bg-fixed"
        style="background-image:url('{{ asset('images/Header Homepage-01.jpg') }}') ">
        <a href="{{ url('') }}"><img src="{{ asset('images/Logo Kryia-03.png') }}" alt="Logo Kriya Indonesia"
                class="w-auto h-40 mt-20"></a>
        <form action="{{ url('input_exhibitor_form_a') }}"
            class="w-full md:w-1/3 md:mb-40 mx-auto flex flex-col gap-6 mt-10 bg-white shadow-md p-4 pb-20 md:p-4 rounded-lg"
            method="POST">
            @csrf
            <h1 class="font-bold text-warna-01 text-center text-4xl">Form A Exhibitor</h1>
            <div>
                <label for="perusahaan" class="mb-1 block">Perusahaan/Instansi <small
                        class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="perusahaan" name="perusahaan">
            </div>
            <div>
                <label for="alamat" class="mb-1 block">Alamat Kantor <small class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="alamat" name="alamat">
            </div>
            <div>
                <label for="kota" class="mb-1 block req">Kota <small class="text-red-700">*</small></label></label>
                <input type="text" required
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="kota" name="kota">
            </div>
            <div>
                <label for="provinsi" class="mb-1 block req">Provinsi <small
                        class="text-red-700">*</small></label></label>
                <input type="text" required
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="provinsi" name="provinsi">
            </div>
            <div>
                <label for="telp_kantor" class="mb-1 block">Telepon Kantor <small class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="telp_kantor" name="telp_kantor">
            </div>
            <div>
                <label for="no_npwp" class="mb-1 block">Nomor NPWP/KTP</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="no_npwp" name="no_npwp">
            </div>
            <div>
                <label for="alamat_npwp" class="mb-1 block">Alamat NPWP/KTP</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="alamat_npwp" name="alamat_npwp">
            </div>
            <div>
                <label for="email" class="mb-1 block">E-mail <small class="text-red-700">*</small></label>
                <input required type="email"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="email" name="email">
            </div>
            <div>
                <label for="website" class="mb-1 block">Website (optional)</label>
                <input type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="website" name="website">
            </div>
            <div>
                <label for="pic" class="mb-1 block">Penanggungjawab/PIC <small
                        class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="pic" name="pic">
            </div>
            <div>
                <label for="jabatan" class="mb-1 block">Jabatan <small class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="jabatan" name="jabatan">
            </div>
            {{-- <div>
                <label for="handphone" class="mb-1 block">Nomor Handphone <small class="text-red-700">*</small></label>
                <input required  type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="handphone" name="handphone">
            </div> --}}
            <div>
                <label for="kategori" class="mb-1 block">Jenis Produk <small class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="kategori" name="kategori">
            </div>
            <div>
                <label for="bidang_usaha" class="mb-1 block">Bidang Usaha <small
                        class="text-red-700">*</small></label>
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
            <div>
                <label for="hall" class=" block">Hall <small class="text-red-700">*</small></label>
                <select required
                    class="border rounded-md px-2 py-2 w-full bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="hall" name="hall">
                    <option value="" disabled selected hidden>...</option>
                    <option value="Lobby Assembly Hall">Lobby Assembly Hall</option>
                    <option value="Assembly Hall">Assembly Hall</option>
                </select>
            </div>
            <div>
                <label for="nomor_stand" class=" block">Nomor Stand <small class="text-red-700">*</small></label>
                <small class="mb-1 block">Contoh : AS101</small>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="nomor_stand" name="nomor_stand">
            </div>
            <div>
                <label for="fascia" class=" block">Nama Brand di Fascia <small
                        class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="fascia" name="fascia">
            </div>
            <div class="flex flex-row gap-4">
                <div>
                    <label for="panjang" class=" block">Panjang (m) <small class="text-red-700">*</small></label>
                    <input required type="number"
                        class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                        id="panjang" name="panjang">
                </div>
                <div>
                    <label for="lebar" class=" block">Lebar (m) <small class="text-red-700">*</small></label>
                    <input required type="number"
                        class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                        id="lebar" name="lebar">
                </div>
                <div>
                    <label for="luas" class=" block">luas (m<sup>2</sup>) <small
                            class="text-red-700">*</small></label>
                    <input required type="number"
                        class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                        id="luas" name="luas">
                </div>
            </div>
            <div>
                <label for="harga" class="mb-1 block">Harga <small class="text-red-700">*</small></label>
                <select required
                    class="border rounded-md px-2 py-2 w-full bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="harga" name="harga">
                    <option value="" disabled selected hidden>...</option>
                    <option value="32000000">Rp 32.000.000 - Lobby Prime Area Ukuran 3x4m</option>
                    <option value="24300000">Rp 24.300.000 - Lobby Prime Area Ukuran 3x3m</option>
                    <option value="46800000">Rp 46.800.000 - Assembly Hall Prime Area Ukuran 19,5m<sup>2</sup></option>
                    <option value="28800000">Rp 28.800.000 - Assembly Hall Prime Area Ukuran 3x4m</option>
                    <option value="21600000">Rp 21.600.000 - Assembly Hall Prime Area Ukuran 3x3m</option>
                    <option value="18000000">Rp 18.000.000 - Assembly Hall Stand Hook Ukuran 3x3m</option>
                    <option value="27000000">Rp 27.000.000 - Assembly Hall Stand Hook Ukuran 13,5m<sup>2</sup></option>
                    <option value="17500000">Rp 17.500.000 - Assembly Hall Stand non Hook Ukuran 3x3m</option>
                    <option value="4000000">Rp 4.000.000 - Assembly Hall Area K/L, BUMN, Pemda</option>
                </select>
            </div>
            <div>
                <label for="total_harga" class=" block">Total Harga <small class="text-red-700">*</small></label>
                <input required type="number"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="total_harga" name="total_harga">
            </div>
            <div>
                <label for="sales" class=" block">Sales Marketing Yang Melayani Anda <small
                        class="text-red-700">*</small></label>
                <input required type="text"
                    class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                    id="sales" name="sales">
            </div>
            <div class="flex flex-row gap-2 items-start">
                <input required type="checkbox" name="agreement" id="agreement" class="h-16 w-16">
                <label for="agreement" class="mb-1 block">Dengan mengisi formulir diatas maka saya menyatakan berminat
                    dengan pameran KRIYA INDONESIA 2024, yang selanjutnya dapat dikirimkan infomasi terkait pendaftaran
                    saya
                    melalui email dan nomor telepon yang tertera</label>
            </div>
            <div class="mx-auto">
                <button type="submit" class="bg-warna-01 rounded px-8 py-2 text-white">Kirim</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('pdf_id'))
        <script>
            const suksesAlert = Swal.mixin({
                customClass: {
                    confirmButton: "px-8 py-2 text-white bg-warna-01/80 hover:bg-warna-01/100 focus:outline-none rounded m-2",
                    cancelButton: "px-8 py-2 text-white bg-gray-300/80 hover:bg-gray-300/100 focus:outline-none rounded m-2"
                },
                buttonsStyling: false
            });
            suksesAlert.fire({
                title: "Sukses!",
                html: "Silahkan <strong>DOWNLOAD</strong> Form A dan Mohon ditandatangani",
                icon: "success",
                showCancelButton: true,
                confirmButtonText: "Download PDF",
                cancelButtonText: "Cancel",
            }).then((result) => {
                if (result.isConfirmed) {
                    const pdf_id = {{ session('pdf_id') }};
                    window.location.href = `/export_exhibitor_form_a_pdf/${pdf_id}`;
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        </script>
    @endif

    <script src="{{ asset('javascript/script.js') }}"></script>
</body>

</html>
