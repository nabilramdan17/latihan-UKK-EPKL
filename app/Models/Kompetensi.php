<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kompetensi extends Model
{
    protected $fillable = [
        'nama_kompetensi',
        'deskripsi',
    ];

    public function siswa()
{
    return $this->belongsToMany(
        Siswa::class,
        'kompetensi_siswa',
        'kompetensi_id',
        'siswa_id'
    );
}
}