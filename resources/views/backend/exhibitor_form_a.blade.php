@include('backend.template.header')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Data Exhibitor</h1>
    <a href="{{ url('export_exhibitor_form_a') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Download Data</a>
</div>

@include('backend.template.toast')

<div class="flex flex-col gap-4">
    <table id="table_exhibitor_form_a" class="display" style="width:100%">
        <thead>
            <tr>
                <th data-priority="1">Created at</th>
                <th>Perusahaan</th>
                <th>PIC</th>
                <th>Telpon Kantor</th>
                <th>Email</th>
                <th>Nomor Stand</th>
                <th>Sales</th>
                <th data-priority="2">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exhibitors as $exhibitor)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ date_format($exhibitor->created_at, 'Y M d') }}</td>
                    <td>{{ $exhibitor->perusahaan }}</td>
                    <td>{{ $exhibitor->pic }}</td>
                    <td>{{ $exhibitor->telp_kantor }}</td>
                    <td>{{ $exhibitor->email }}</td>
                    <td>{{ $exhibitor->nomor_stand }}</td>
                    <td>{{ $exhibitor->sales }}</td>
                    <td>
                        <a href="{{ url('export_exhibitor_form_a_pdf/' . $exhibitor->id) }}"><button
                                class="btn btn-primary btn-sm ">Download PDF</button></a>
                        <a href="{{ url('dashboard/exhibitor_form_a/' . $exhibitor->id) }}"><button
                                class="btn btn-secondary btn-sm ">Detail</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('backend.template.footer')
