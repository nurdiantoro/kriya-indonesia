<?php

namespace App\Exports;

use App\Models\Exhibitor_form_a;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\WithHeadings;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;

class ExportExhibitorFormA implements FromCollection, WithHeadings, ShouldAutoSize, WithColumnFormatting
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Exhibitor_form_a::orderBy("created_at", "asc")->get();
        return Exhibitor_form_a::all()->map(function ($data) {
            return [
                'id' => $data->id,
                'perusahaan' => $data->perusahaan,
                'alamat' => $data->alamat,
                'telp_kantor' => $data->telp_kantor,
                'no_npwp' => $data->no_npwp,
                'alamat_npwp' => $data->alamat_npwp,
                'email' => $data->email,
                'website' => $data->website,
                'pic' => $data->pic,
                'jabatan' => $data->jabatan,
                // 'handphone' => $data->handphone,
                'kategori' => $data->kategori,
                'bidang_usaha' => $data->bidang_usaha,
                'hall' => $data->hall,
                'nomor_stand' => $data->nomor_stand,
                'fascia' => $data->fascia,
                'panjang' => $data->panjang,
                'lebar' => $data->lebar,
                'luas' => $data->luas,
                'harga' => $data->harga,
                'total_harga' => $data->total_harga,
            ];
        });
    }
    public function headings(): array
    {
        return [
            'id',
            'Perusahaan',
            'Alamat',
            'Telpon Kantor',
            'Nomor NPWP',
            'Alamat NPWP',
            'Email',
            'Website',
            'PIC',
            'Jabatan',
            // 'Handphone',
            'Kategori',
            'Bidang Usaha',
            'Hall',
            'Nomor Stand',
            'Fascia',
            'Panjang (m)',
            'Lebar (m)',
            'Luas (m2)',
            'Harga',
            'Total Harga',
            // 'Status',
            // 'Created at',
            // 'Updated at',
        ];
    }

    public function columnFormats(): array
    {
        return [
            'S' => NumberFormat::FORMAT_CURRENCY_IDR,
            'T' => NumberFormat::FORMAT_CURRENCY_IDR,
        ];
    }
}
