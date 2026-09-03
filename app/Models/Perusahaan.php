<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    protected $fillable = [
        'nama_perusahaan',
        'bidang_usaha',
        'alamat',
        'telepon',
        'nama_pembimbing_industri',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class);
    }
}