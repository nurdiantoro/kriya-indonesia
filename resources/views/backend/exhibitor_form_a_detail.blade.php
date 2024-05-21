@include('backend.template.header')
@include('backend.template.toast')

<script>
    function deleteFormA(id) {
        Swal.fire({
            title: "Hapus Form A?",
            text: "Data yang sudah dihapus tidak dapat dikembalikan",
            showCancelButton: true,
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = `delete/${id}`;
            }
        });
    }
</script>

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Detail Exhibitor</h1>
</div>

<div class="flex flex-row gap-2 justify-between md:w-1/2">
    <div class="">
        <a href="{{ url('dashboard/exhibitor_form_a') }}" class="btn btn-outline-primary">Back</a>
    </div>
    <div class="flex flex-row gap-4 mb-2">
        <a href="{{ url('dashboard/exhibitor_form_a/change/' . $exhibitor->id) }}" class="btn btn-primary">Change</a>
        <button onclick="deleteFormA({{ $exhibitor->id }})" class="btn btn-danger">Delete</button>
    </div>
</div>


<div class="flex flex-col md:w-1/2 pb-20">
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Perusahaan</span>
        <table class="w-full">
            <tr>
                <td class="w-20 md:w-60">Perusahaan</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="perusahaan" id="perusahaan" value="{{ $exhibitor->perusahaan }}">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="alamat" id="alamat" value="{{ $exhibitor->alamat }}">
                </td>
            </tr>
            <tr>
                <td>Telpon Kantor</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="telp_kantor" id="telp_kantor" value="{{ $exhibitor->telp_kantor }}">
                </td>
            </tr>
            <tr>
                <td>Nomor NPWP/KTP</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="no_npwp" id="no_npwp" value="{{ $exhibitor->no_npwp }}">
                </td>
            </tr>
            <tr>
                <td>Alamat NPWP/KTP</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="alamat_npwp" id="alamat_npwp" value="{{ $exhibitor->alamat_npwp }}">
                </td>
            </tr>
            <tr>
                <td>Kota</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="kota" id="kota" value="{{ $exhibitor->kota }}">
                </td>
            </tr>
            <tr>
                <td>Provinsi</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="provinsi" id="provinsi" value="{{ $exhibitor->provinsi }}">
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="email"
                        name="email" id="email" value="{{ $exhibitor->email }}">
                </td>
            </tr>
            <tr>
                <td>Website</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="website" id="website" value="{{ $exhibitor->website }}">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="kategori" id="kategori" value="{{ $exhibitor->kategori }}">
                </td>
            </tr>
            <tr>
                <td>Bidang Usaha</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="bidang_usaha" id="bidang_usaha" value="{{ $exhibitor->bidang_usaha }}">
                </td>
            </tr>
        </table>

    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data PIC</span>
        <table class="w-full">
            <tr>
                <td class="w-20 md:w-60">PIC</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="pic" id="pic" value="{{ $exhibitor->pic }}">
                </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="jabatan" id="jabatan" value="{{ $exhibitor->jabatan }}">
                </td>
            </tr>
            <tr>
                <td>Sales</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="sales" id="sales" value="{{ $exhibitor->sales }}">
                </td>
            </tr>
            {{-- <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="handphone" id="handphone" value="{{ $exhibitor->handphone }}">
                </td>
            </tr> --}}
        </table>
    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Booth</span>
        <table class="w-full">
            <tr>
                <td class="w-20 md:w-60">Hall</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="hall" id="hall" value="{{ $exhibitor->hall }}">
                </td>
            </tr>
            <tr>
                <td class="w-20 md:w-60">Nomor Stand</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="nomor_stand" id="nomor_stand" value="{{ $exhibitor->nomor_stand }}">
                </td>
            </tr>
            <tr>
                <td>Fascia</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="fascia" id="fascia" value="{{ $exhibitor->fascia }}">
                </td>
            </tr>
        </table>
    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Ukuran & Harga</span>
        <table class="w-full">
            <tr>
                <td class="w-20 md:w-60">Panjang</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="panjang" id="panjang" value="{{ $exhibitor->panjang }}">
                </td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="lebar" id="lebar" value="{{ $exhibitor->lebar }}">
                </td>
            </tr>
            <tr>
                <td>Luas</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="luas" id="luas" value="{{ $exhibitor->luas }}">
                </td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="harga" id="harga" value="{{ number_format($exhibitor->harga, 0, ',', '.') }}">
                </td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="total_harga" id="total_harga"
                        value="{{ number_format($exhibitor->total_harga, 0, ',', '.') }}">
                </td>
            </tr>
        </table>
    </div>
</div>


@include('backend.template.footer')
