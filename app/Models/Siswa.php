<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;
use App\Models\Kompetensi;

class Siswa extends Model
{
    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'tanggal_mulai_pkl',
        'tanggal_selesai_pkl',
        'perusahaan_id',
    ];

    public function perusahaan()
    {
        return $this->belongsTo(Perusahaan::class);
    }

   public function kompetensi()
{
    return $this->belongsToMany(
        Kompetensi::class,
        'kompetensi_siswa',
        'siswa_id',
        'kompetensi_id'
    );
}
}