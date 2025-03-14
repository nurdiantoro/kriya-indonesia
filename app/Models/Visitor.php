<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    protected $table = 'visitor';
    protected $fillable =
    [
        'name',
        'email',
        'telp',
        'qr_code',
    ];
}
