<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <style>
        @page {
            margin: 0px;
        }

        body {
            margin: 0px;
            background-color: #fff !important;
        }

        table {
            width: 100%;
        }

        table tr {
            /* margin-bottom: 10px; */
            /* vertical-align: top */
        }

        p {
            /* margin-bottom: 0px; */
            /* margin-top: 10px; */
        }

        /* table,
        tr,
        td {
            border: 1px solid #000;
        } */

        .document {
            padding-left: 30px;
            padding-right: 30px;
            font-size: 12px;
        }

        .ttd {
            padding-left: 30px;
            padding-right: 30px;
            font-size: 12px;
            text-align: right;
        }

        .column {
            display: flex;
            flex-direction: row;
        }

        .row {
            display: flex;
            flex-direction: column;
        }

        .value {
            border: 1px solid #bdbdbd;
            border-radius: 10px;
            padding: 10px;
        }

        .required::after {
            content: " *";
            color: red;
        }

        .w-50 {
            width: 40%;
        }

        .checkbox input {
            display: inline;
            position: relative;
        }

        .logo {
            height: 50px;
            width: auto;
        }
    </style>
</head>

<body
    style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important; font-family: 'Open Sans', Helvetica, Arial, sans-serif; font-weight: 400;">
    <img src="{{ public_path('images/header-form-a.jpg') }}" style="width: 100%; height: auto">

    <div class="document">
        <p>Kami yang bertanda tangan di bawah ini, menyatakan ikut berpartisipasi sebagai peserta Pameran Kriya
            Indonesia tahun 2024 dan menyetujui semua ketentuan yang telah ditetapkan oleh pihak Penyelenggara.</p>

        <div class="row">
            <table>
                <tr>
                    <td>
                        <span class=" required">Nama Perusahaan/Instansi</span>
                    </td>
                </tr>
                <tr>
                    <td class="value">{{ $exhibitor->perusahaan }}</td>
                </tr>
            </table>
        </div>
        <div class="row">
            <p class=" required">Alamat Kantor</p>
            <p class="value">{{ $exhibitor->alamat }}</p>
        </div>
        <table style="margin-bottom: 2px">
            <tr>
                <td class=" required">Telepon Kantor</td>
                <td> </td>
                <td class=" required">E-mail</td>
                <td> </td>
                <td class=" required">Nomor NPWP/KTP</td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->telp_kantor }}</td>
                <td> </td>
                <td class="value">{{ $exhibitor->email }}</td>
                <td> </td>
                <td class="value">{{ $exhibitor->no_npwp }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <td class=" required">Alamat NPWP/KTP</td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->alamat_npwp ? $exhibitor->alamat_npwp : '-' }}</td>
            </tr>
        </table>
        <table style="margin-bottom: 2px">
            <tr>
                <td>Website (optional)</td>
                <td> </td>
                <td class="required">Jenis Produk</td>
                <td> </td>
                <td class="required">Bidang Usaha</td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->website }}</td>
                <td> </td>
                <td class="value">{{ $exhibitor->kategori }}</td>
                <td> </td>
                <td class="checkbox" rowspan="3">
                    <input type="checkbox" {{ $exhibitor->bidang_usaha == 'Eksporter' ? 'checked' : '' }}>
                    Eksporter<br>
                    <input type="checkbox" {{ $exhibitor->bidang_usaha == 'Produsen' ? 'checked' : '' }}> Produsen<br>
                    <input type="checkbox" {{ $exhibitor->bidang_usaha == 'Distributor' ? 'checked' : '' }}>
                    Distributor<br>
                    <input type="checkbox" {{ $exhibitor->bidang_usaha == 'Pemerintahan' ? 'checked' : '' }}>
                    Pemerintahan<br>
                    <input type="checkbox" {{ $exhibitor->bidang_usaha == 'Lain-Lain' ? 'checked' : '' }}>
                    Lain-lain<br>
                </td>
            </tr>
            <tr>
                <td class="required">Nomor Stand</td>
                <td> </td>
                <td class="required">Nama Brand di Fascia</td>
                <td> </td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->nomor_stand }}</td>
                <td> </td>
                <td class="value">{{ $exhibitor->fascia }}</td>
                <td> </td>
            </tr>
        </table>
        <table style="margin-bottom: 2px">
            <tr>
                <td class="required">Hall</td>
                <td></td>
                <td class="required">Penanggungjawab/PIC</td>
                <td></td>
                <td class="required">Jabatan</td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->hall }}</td>
                <td></td>
                <td class="value">{{ $exhibitor->pic }}</td>
                <td></td>
                <td class="value">{{ $exhibitor->jabatan }}</td>
            </tr>
        </table>
        <table style="margin-bottom: 2px">
            <tr>
                <td class="required" style="width: 10%">Panjang</td>
                <td class="required" style="width: 10%">Lebar</td>
                <td class="required" style="width: 10%">Luas</td>
                <td class="required">Harga</td>
            </tr>
            <tr>
                <td class="value">{{ $exhibitor->panjang }}</td>
                <td class="value">{{ $exhibitor->lebar }}</td>
                <td class="value">{{ $exhibitor->luas }}</td>
                <td class="value">Rp. {{ number_format($exhibitor->harga, 0, ',', '.') }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <td class="required">Total Harga</td>
                <td class="required">Sales Marketing Yang Melayani Anda</td>
            </tr>
            <tr>
                <td class="value">Rp. {{ number_format($exhibitor->total_harga, 0, ',', '.') }}</td>
                <td class="value">{{ $exhibitor->sales }}</td>
            </tr>
        </table>
        <table>
            <tr>
                <td>
                    <input type="checkbox" checked>
                </td>
                <td>
                    Dengan mengisi formulir diatas maka saya menyatakan berminat dengan pameran KRIYA INDONESIA 2024,
                    yang selanjutnya dapat dikirimkan infomasi terkait pendaftaran saya melalui email dan nomor telepon
                    yang tertera
                </td>
            </tr>
            </tab>
    </div>
    <table class="ttd">
        <tr>
            <td>
                <table style="text-align: center">
                    <tr>
                        <td>
                            <p>Hosted by:</p>
                        </td>
                        <td>
                            <p>Organized by:</p>
                        </td>
                    </tr>
                    <tr>
                        <td><img style="width: auto; height: 70px;"
                                src="{{ public_path('images/Logo Supported/Logo YRKI.png') }}"></td>
                        <td><img style="width: auto; height: 55px;"
                                src="{{ public_path('images/Logo Supported/Logo Debindo.png') }}"></td>
                    </tr>
                </table>
            </td>
            <td>
                <div class="">
                    <p>______________ , ___________________ 2024</p>
                    <p style="margin-bottom: 70px">Hormat kami</p>
                    <p style="margin: 0px">____________________________</p>
                    <p style="margin: 0px">Nama Lengkap & Tanda Tangan</p>
                </div>
            </td>
        </tr>
    </table>
</body>

</html>
