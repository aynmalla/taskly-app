<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermohonanPasangBaru extends Model
{
    protected $table = 'permohonan_pasang_baru';

    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
        'daya',
        'jenis_bangunan',
        'catatan',
        'status',
    ];
}
