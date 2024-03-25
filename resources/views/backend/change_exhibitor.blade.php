@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Detail Exhibitor</h1>
</div>
<form action="{{ url('change_exhibitor') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td class="w-60">Perusahaan</td>
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
            <td>PIC</td>
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
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>{{ $exhibitor->kategori }}</td>
        </tr>
        <tr>
            <td>Nomor Stand</td>
            <td>:</td>
            <td>{{ $exhibitor->nomor_stand }}</td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>{{ $exhibitor->status }}</td>
        </tr>
    </table>
</form>

@include('backend.template.footer')
