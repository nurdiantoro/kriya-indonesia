<?php

namespace App\Exports;

use App\Models\Visitor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportVisitor implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return Visitor::orderBy("created_at", "asc")->get();
        return Visitor::all()->map(function ($data) {
            return [
                'id' => $data->id,
                'nama' => $data->nama,
                'email' => $data->email,
                'no_telp' => $data->no_telp,
                'qr_code' => $data->qr_code,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'id',
            'Nama',
            'Email',
            'No Telephone',
            'QR Code',
            // 'Created at',
            // 'Updated at',
        ];
    }
}
