@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Scan Barcode</h1>
</div>

<div class="flex md:flex-row flex-col mt-10">
    <div class="flex flex-col md:w-1/2 justify-start">
        <form action="{{ url('dashboard/scan_barcode/submit') }}">
            @csrf
            <input required type="text"
                class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                id="barcode" name="barcode" placeholder="Scan Barcode disini">
            <button type="submit"
                class="w-full mt-4 rounded bg-warna-01 text-white p-2 hover:shadow-lg">Submit</button>
        </form>
        @if (session()->has('pesan'))
            <span class="text-center mt-4">Data Berhasil Dikirim!</span>
        @endif

        <div class="flex flex-row gap-2 my-10">
            <div class="w-full md:h-60 bg-white p-2 flex items-center justify-center rounded border text-center">
                <div class="">
                    <h2 class="text-6xl font-bold text-warna-01">{{ $visitor_todays }}</h2>
                    <span>Pengunjung Hari ini</span>
                </div>
            </div>
            <div class="w-full md:h-60 bg-white p-2 flex items-center justify-center rounded border text-center">
                <div class="">
                    <h2 class="text-6xl font-bold text-warna-01">{{ $visitor_totals }}</h2>
                    <span>Total Pengunjung</span>
                </div>
            </div>
        </div>
        <a href="{{ url('export_visitor') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download Data</a>
    </div>

    {{-- Table --}}
    <div class="md:w-1/2 w-full md:px-10">
        <table id="table_visitor" class="display" style="width:100%">
            <thead>
                <tr>
                    <td class="text-left">Nomor</td>
                    <td class="text-left">QR Code</td>
                    <td class="text-left">Nama</td>
                    <td class="text-left">Tanggal</td>
                    <td class="text-left">Jam Masuk</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($visitors as $visitor)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-left">{{ $visitor->qr_code }}</td>
                        <td class="text-left">{{ $visitor->name }}</td>
                        <td class="text-left">{{ date_format($visitor->created_at, 'd F Y') }}</td>
                        <td class="text-left">{{ date_format($visitor->created_at, 'H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>



@include('backend.template.footer')
