<?php

namespace App\Exports;

use App\Models\Exhibitor;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExhibitor implements FromCollection, WithHeadings
// {
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        return Exhibitor::orderBy("created_at", "asc")->get();
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
// class ExportExhibitor implements FromQuery, WithHeadings
// {
//     use Exportable;

//     public function query()
//     {
//         return Exhibitor::orderBy("created_at", "asc")->get();
//     }

//     public function headings(): array
//     {
//         return [
//             '#',
//             'User',
//             'Date',
//         ];
//     }
// }
