@include('backend.template.header')

<div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-800 font-bold">Detail Exhibitor</h1>
</div>

<div class="flex flex-row gap-2 justify-between md:w-1/2">
    <div class="mb-2">
        <a href="{{ url('dashboard/exhibitor/' . $exhibitor->id) }}" class="btn btn-outline-primary">Back</a>
    </div>
</div>

<form method="POST" action="{{ url('dashboard/exhibitor/update') }}">
    @csrf
    <div class="flex flex-col md:w-1/2 pb-20">
        <div class="border-[1px] rounded-md shadow-md px-2 py-2 bg-white overflow-hidden mb-2">
            <span class="text-xl font-bold text-gray-800">Data Perusahaan</span>
            <table class="w-full">
                <tr>
                    <td class="w-20 md:w-60">Perusahaan</td>
                    <td>:</td>
                    <td>
                        <input type="hidden" name="id" value="{{ $exhibitor->id }}">
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="perusahaan" id="perusahaan" value="{{ $exhibitor->perusahaan }}">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="alamat" id="alamat" value="{{ $exhibitor->alamat }}">
                    </td>
                </tr>
                <tr>
                    <td>Telpon Kantor</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="telp_kantor" id="telp_kantor" value="{{ $exhibitor->telp_kantor }}">
                    </td>
                </tr>
                <tr>
                    <td>Nomor NPWP/KTP</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="no_npwp" id="no_npwp" value="{{ $exhibitor->no_npwp }}">
                    </td>
                </tr>
                <tr>
                    <td>Alamat NPWP/KTP</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="alamat_npwp" id="alamat_npwp" value="{{ $exhibitor->alamat_npwp }}">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="email" name="email" id="email" value="{{ $exhibitor->email }}">
                    </td>
                </tr>
                <tr>
                    <td>Website</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="website" id="website" value="{{ $exhibitor->website }}">
                    </td>
                </tr>
                <tr>
                    <td>Kategori</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="kategori" id="kategori" value="{{ $exhibitor->kategori }}">
                    </td>
                </tr>
                <tr>
                    <td>Bidang Usaha</td>
                    <td>:</td>
                    <td>
                        <select required
                            class="border rounded-md px-2 py-2 w-full bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="bidang_usaha" name="bidang_usaha">
                            <option value="Eksporter" {{ $exhibitor->bidang_usaha == 'Eksporter' ? 'selected' : '' }}>
                                Eksporter</option>
                            <option value="Produsen" {{ $exhibitor->bidang_usaha == 'Produsen' ? 'selected' : '' }}>
                                Produsen</option>
                            <option value="Distributor"
                                {{ $exhibitor->bidang_usaha == 'Distributor' ? 'selected' : '' }}>Distributor</option>
                            <option value="Pemerintahan"
                                {{ $exhibitor->bidang_usaha == 'Pemerintahan' ? 'selected' : '' }}>Pemerintahan
                            </option>
                            <option value="Lain-Lain" {{ $exhibitor->bidang_usaha == 'Lain-Lain' ? 'selected' : '' }}>
                                Lain-Lain</option>
                        </select>
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
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="pic" id="pic" value="{{ $exhibitor->pic }}">
                    </td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="jabatan" id="jabatan" value="{{ $exhibitor->jabatan }}">
                    </td>
                </tr>
                {{-- <tr>
                    <td>Nomor Handphone</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="handphone" id="handphone" value="{{ $exhibitor->handphone }}">
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
                        <select
                            class="border rounded-md px-2 py-2 w-full bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="hall" name="hall">
                            <option value="Lobby Assembly Hall"
                                {{ $exhibitor->hall == 'Lobby Assembly Hall' ? 'selected' : '' }}>
                                Lobby Assembly Hall
                            </option>
                            <option value="Assembly Hall" {{ $exhibitor->hall == 'Assembly Hall' ? 'selected' : '' }}>
                                Assembly Hall
                            </option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="w-20 md:w-60">Nomor Stand</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="nomor_stand" id="nomor_stand" value="{{ $exhibitor->nomor_stand }}">
                    </td>
                </tr>
                <tr>
                    <td>Fascia</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="text" name="fascia" id="fascia" value="{{ $exhibitor->fascia }}">
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
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="number" name="panjang" id="panjang" value="{{ $exhibitor->panjang }}">
                    </td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="number" name="lebar" id="lebar" value="{{ $exhibitor->lebar }}">
                    </td>
                </tr>
                <tr>
                    <td>Luas</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="number" name="luas" id="luas" value="{{ $exhibitor->luas }}">
                    </td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td>
                        <select required
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            id="harga" name="harga">
                            <option value="32000000" {{ $exhibitor->harga == '32000000' ? 'selected' : '' }}>Rp
                                32.000.000 - Lobby Prime Area Ukuran 3x4m</option>
                            <option value="24300000" {{ $exhibitor->harga == '24300000' ? 'selected' : '' }}>Rp
                                24.300.000 - Lobby Prime Area Ukuran 3x3m</option>
                            <option value="46800000" {{ $exhibitor->harga == '46800000' ? 'selected' : '' }}>Rp
                                46.800.000 - Assembly Hall Prime Area Ukuran 19,5m<sup>2</sup>
                            </option>
                            <option value="28800000" {{ $exhibitor->harga == '28800000' ? 'selected' : '' }}>Rp
                                28.800.000 - Assembly Hall Prime Area Ukuran 3x4m</option>
                            <option value="21600000" {{ $exhibitor->harga == '21600000' ? 'selected' : '' }}>Rp
                                21.600.000 - Assembly Hall Prime Area Ukuran 3x3m</option>
                            <option value="18000000" {{ $exhibitor->harga == '18000000' ? 'selected' : '' }}>Rp
                                18.000.000 - Assembly Hall Stand Hook Ukuran 3x3m</option>
                            <option value="27000000" {{ $exhibitor->harga == '27000000' ? 'selected' : '' }}>Rp
                                27.000.000 - Assembly Hall Stand Hook Ukuran 13,5m<sup>2</sup>
                            </option>
                            <option value="17500000" {{ $exhibitor->harga == '17500000' ? 'selected' : '' }}>Rp
                                17.500.000 - Assembly Hall Stand non Hook Ukuran 3x3m</option>
                            <option value="4000000" {{ $exhibitor->harga == '4000000' ? 'selected' : '' }}>Rp
                                4.000.000 - Assembly Hall Area K/L, BUMN, Pemda</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>
                        <input
                            class="w-full border rounded-md p-2 bg-gray-100 focus:bg-white focus:outline-warna-01 focus:outline-1"
                            type="number" name="total_harga" id="total_harga"
                            value="{{ $exhibitor->total_harga }}">
                    </td>
                </tr>
            </table>
        </div>
        <button type="submit" class="tombol-1">Submit</button>
    </div>
</form>


@include('backend.template.footer')
