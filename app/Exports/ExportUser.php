<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportUser implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // return User::all();
        return User::where('role_id', '2')->get()->map(function ($data) {
            return [
                'id' => $data->id,
                'name' => $data->name,
                'email' => $data->email,
                'telp' => $data->telp,
                'qr_code' => $data->qr_code,
                'created_at' => date_format($data->created_at, "d M Y"),
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
            'Registration at',
            // 'Updated at',
        ];
    }
}
