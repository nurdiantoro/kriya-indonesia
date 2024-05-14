<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibitor extends Model
{
    use HasFactory;
    protected $table = 'exhibitor';
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
        'no_stand',
        'status',
    ];
}
