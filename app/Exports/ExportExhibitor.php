<?php

namespace App\Exports;

use App\Models\Exhibitor;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ExportExhibitor implements FromCollection, WithHeadings, ShouldAutoSize
// {
{
    /**
     * @return \Illuminate\Support\Collection
     */

    public function collection()
    {
        // return Exhibitor::orderBy("created_at", "asc")->get();
        return Exhibitor::all()->map(function ($data) {
            return [
                'id' => $data->id,
                'perusahaan' => $data->perusahaan,
                'alamat' => $data->alamat,
                'telp_kantor' => $data->telp_kantor,
                'email' => $data->email,
                'website' => $data->website,
                'pic' => $data->pic,
                'jabatan' => $data->jabatan,
                'handphone' => $data->handphone,
                'kategori' => $data->kategori,
                'nomor_stand' => $data->nomor_stand,
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
            'Email',
            'Website',
            'PIC',
            'Jabatan',
            'Handphone',
            'Kategori',
            'Nomor Stand',
            // 'Status',
            // 'Created at',
            // 'Updated at',
        ];
    }
}
