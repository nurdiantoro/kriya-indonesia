@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Detail Exhibitor</h1>
</div>

<div class="flex flex-row gap-2 justify-between md:w-1/2">
    <div class="flex flex-row gap-4 mb-2">
        <a href="{{ url('dashboard/exhibitor') }}" class="btn btn-outline-primary">Back</a>
    </div>
    <div class="flex flex-row gap-4 mb-2">
        <a href="{{ url('dashboard/exhibitor/delete/' . $exhibitor->id) }}" class="btn btn-danger">Delete</a>
    </div>
</div>

<div class="flex flex-col md:w-1/2">
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Perusahaan</span>
        <table>
            <tr>
                <td class="w-20 md:w-60">Perusahaan</td>
                <td>:</td>
                <td>{{ $exhibitor->perusahaan }}</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $exhibitor->alamat }}</td>
            </tr>
            <tr>
                <td>Telpon Kantor</td>
                <td>:</td>
                <td>{{ $exhibitor->telp_kantor }}</td>
            </tr>
            <tr>
                <td>NPWP</td>
                <td>:</td>
                <td>{{ $exhibitor->no_npwp }}</td>
            </tr>
            <tr>
                <td>Alamat NPWP</td>
                <td>:</td>
                <td>{{ $exhibitor->alamat_npwp }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td>{{ $exhibitor->email }}</td>
            </tr>
            <tr>
                <td>Website</td>
                <td>:</td>
                <td>{{ $exhibitor->website }}</td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>:</td>
                <td>{{ $exhibitor->kategori }}</td>
            </tr>
            <tr>
                <td>Bidang Usaha</td>
                <td>:</td>
                <td>{{ $exhibitor->bidang_usaha }}</td>
            </tr>
        </table>
    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data PIC</span>
        <table>
            <tr>
                <td class="w-20 md:w-60">PIC</td>
                <td>:</td>
                <td>{{ $exhibitor->pic }}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>{{ $exhibitor->jabatan }}</td>
            </tr>
            <tr>
                <td>Nomor Handphone</td>
                <td>:</td>
                <td>{{ $exhibitor->handphone }}</td>
            </tr>
        </table>
    </div>
    <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
        <span class="text-xl font-bold text-gray-800">Data Booth</span>
        <table>
            <tr>
                <td class="w-20 md:w-60">Nomor Stand</td>
                <td>:</td>
                <td>{{ $exhibitor->nomor_stand }}</td>
            </tr>
            <tr>
                <td>Fascia</td>
                <td>:</td>
                <td>{{ $exhibitor->fascia }}</td>
            </tr>
        </table>
    </div>
</div>


@include('backend.template.footer')
