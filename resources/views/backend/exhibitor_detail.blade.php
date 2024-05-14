@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Detail Exhibitor</h1>
</div>

<div class="flex flex-row gap-2 justify-between md:w-1/2">
    <div class="">
        <a href="{{ url('dashboard/exhibitor') }}" class="btn btn-outline-primary">Back</a>
    </div>
    <div class="flex flex-row gap-4 mb-2">
        @if ($form_a == 'true')
            <a class="btn btn-outline-secondary">
            @else
                <a href="{{ url('dashboard/exhibitor/duplicate_to_form_a/' . $exhibitor->id) }}"
                    class="btn btn-outline-primary">
        @endif
        Duplicate to Form A</a>
        <a href="{{ url('dashboard/exhibitor/change/' . $exhibitor->id) }}" class="btn btn-primary">Change</a>
        <a href="{{ url('dashboard/exhibitor/delete/' . $exhibitor->id) }}" class="btn btn-danger">Delete</a>
    </div>
</div>

@if (session('pesan'))
    <div class="bottom-0 left-0 p-4 fixed duration-1000" id="allert">
        <div class="bg-warna-04 shadow-md p-2 rounded-md border border-green-300 flex flex-row items-center gap-2">
            <svg class="inline w-4 h-4 text-green-700" id="rounded check" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 512 512">
                <path fill="currentcolor"
                    d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z" />
            </svg>
            <span class="text-green-700">{{ session('pesan') }}</span>
            <button id="close_allert" class="ml-2" onclick="closeAlert()">
                <svg class="inline w-4 h-6 text-green-500" viewBox="0 0 384 512">
                    <path fill="currentcolor"
                        d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                </svg>
            </button>
        </div>
    </div>
@endif

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
                <td>NPWP</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="no_npwp" id="no_npwp" value="{{ $exhibitor->no_npwp }}">
                </td>
            </tr>
            <tr>
                <td>Alamat NPWP</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="alamat_npwp" id="alamat_npwp" value="{{ $exhibitor->alamat_npwp }}">
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
                <td>Nomor Handphone</td>
                <td>:</td>
                <td>
                    <input disabled class="w-full border border-white bg-white rounded-md p-2" type="text"
                        name="handphone" id="handphone" value="{{ $exhibitor->handphone }}">
                </td>
            </tr>
        </table>
    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Booth</span>
        <table class="w-full">
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
</div>


@include('backend.template.footer')
