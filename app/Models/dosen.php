<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'nidn',
        'departemen',
        'email',
        'prodi',
        'jabatan_akademik',
        'edukasi_s1',
        'edukasi_s2',
        'edukasi_s3',
        'link_sinta',
        'link_scopus',
        'link_scholar',
        'file',
        'profile',
        'mata_kuliah',
        'bidang_keahlian',
        'riset_interest',
    ];
}
