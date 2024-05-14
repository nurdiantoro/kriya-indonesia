@include('frontend.template.header')

<div class="md:px-40 pt-40">
    <div class="flex flex-col gap-4 mb-40">
        <span class="text-center text-4xl font-bold text-warna-01">Floorplan</span>
        <img src="{{ asset('images/Floorplan.png') }}" alt="floorplan kriya indonesia"
            class="md:mx-auto md:h-screen w-full md:w-auto h-auto">
        <a href="{{ asset('pdf/Floorplan.pdf') }}" download="Floorplan.pdf"
            class="rounded bg-warna-01 text-white px-4 py-2 mx-auto">Download Floorplan</a>
    </div>

    {{-- <div class="flex flex-col gap-4">
        <span class="text-center text-4xl font-bold text-warna-01">Exhibitor List</span>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Perusahaan</td>
                    <td>Jenis Produk</td>
                    <td>website</td>
                    <td>Nomor Stand</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($exhibitors as $exhibitor)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $exhibitor->perusahaan }}</td>
                        <td>{{ $exhibitor->kategori }}</td>
                        <td> <a href="{{ $exhibitor->website }}" target="_blank"> {{ $exhibitor->website }}</a></td>
                        <td>{{ $exhibitor->nomor_stand }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}
</div>
@include('frontend.template.footer')
