<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Va extends Model
{
    use HasFactory;
    protected $table = 'vas';
    protected $fillable = [
        'kode',
        'no_induk',
        // 'id_user',
        'nama',
        'prodi',
        'jenis',
        'tahun',
        'semester',
        'nominal',
        'nominal_bayar',
        'tgl_bayar',
        'status',
        // 'reff',
        // 'id'
    ];

}
