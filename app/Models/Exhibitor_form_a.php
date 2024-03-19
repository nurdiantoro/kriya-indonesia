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
        'email',
        'website',
        'pic',
        'jabatan',
        'handphone',
        'kategori',
        'nomor_stand',
        'status',
    ];
}
