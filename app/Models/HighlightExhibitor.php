<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HighlightExhibitor extends Model
{
    use HasFactory;
    protected $table = 'highlight_exhibitors';
    protected $fillable = [
        'logo',
        'perusahaan',
        'website',
        'urutan',
    ];
}
