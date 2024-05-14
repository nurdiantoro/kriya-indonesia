@include('backend.template.header')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Data Exhibitor</h1>
    <a href="{{ url('export_exhibitor') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Download Data</a>
</div>

@include('backend.template.toast')

<div class="flex flex-col gap-4">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <td>Created at</td>
                <td>Perusahaan</td>
                <td>PIC</td>
                <td>Telpon Kantor</td>
                <td>Email</td>
                <td>Nomor Stand</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($exhibitors as $exhibitor)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ date_format($exhibitor->created_at, 'd M Y') }}</td>
                    <td>{{ $exhibitor->perusahaan }}</td>
                    <td>{{ $exhibitor->pic }}</td>
                    <td>{{ $exhibitor->telp_kantor }}</td>
                    <td>{{ $exhibitor->email }}</td>
                    <td>{{ $exhibitor->nomor_stand }}</td>
                    <td>
                        <a href="{{ url('dashboard/exhibitor/' . $exhibitor->id) }}"><button
                                class="btn btn-primary btn-sm ">Detail</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.template.footer')
