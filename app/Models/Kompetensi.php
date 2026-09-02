<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Kompetensi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kompetensi',
        'deskripsi',
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kompetensi_id');
    }


public function kompetensi()
{
    return $this->belongsTo(Kompetensi::class);
}


}