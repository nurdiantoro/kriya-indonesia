<?php

namespace App\Exports;

use App\Models\Exhibitor_form_a;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportExhibitorFormA implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Exhibitor_form_a::orderBy("created_at", "asc")->get();
    }
    public function headings(): array
    {
        return [
            'id',
            'Perusahaan',
            'Alamat',
            'Telpon Kantor',
            'Email',
            'Website',
            'PIC',
            'Jabatan',
            'Handphone',
            'Kategori',
            'Nomor Stand',
            'Status',
            'Created at',
            'Updated at',
        ];
    }
}
