<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor_form_a extends Model
{
    use HasFactory;
    protected $table = 'exhibitor_form_a';
    protected $fillable = [
        'perusahaan',
        'alamat',
        'telp_kantor',
        'no_npwp',
        'alamat_npwp',
        'email',
        'website',
        'pic',
        'jabatan',
        'handphone',
        'kategori',
        'bidang_usaha',
        'hall',
        'nomor_stand',
        'fascia',
        'panjang',
        'lebar',
        'luas',
        'harga',
        'total_harga',
        'sales',
        'kota',
        'status',
    ];
    protected $appends = [
        'created_at',
        'updated_at'
    ];
}
