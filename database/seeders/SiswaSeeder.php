<?php

namespace Database\Seeders;

use App\Models\Siswa;
use App\Models\Kompetensi;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        $ahmad = Siswa::create([
            'nis' => '1001',
            'nama' => 'Ahmad',
            'kelas' => '11 PPLG 2',
            'tanggal_mulai_pkl' => '2026-07-01',
            'tanggal_selesai_pkl' => '2026-09-30',
            'perusahaan_id' => 1,
        ]);

        $budi = Siswa::create([
            'nis' => '1002',
            'nama' => 'Budi',
            'kelas' => '11 PPLG 2',
            'tanggal_mulai_pkl' => '2026-07-01',
            'tanggal_selesai_pkl' => '2026-09-30',
            'perusahaan_id' => 1,
        ]);

        $citra = Siswa::create([
            'nis' => '1003',
            'nama' => 'Citra',
            'kelas' => '11 PPLG 2',
            'tanggal_mulai_pkl' => '2026-07-01',
            'tanggal_selesai_pkl' => '2026-09-30',
            'perusahaan_id' => 1,
        ]);

        $ahmad->kompetensi()->attach([
            Kompetensi::where('nama_kompetensi', 'HTML')->first()->id,
            Kompetensi::where('nama_kompetensi', 'CSS')->first()->id,
            Kompetensi::where('nama_kompetensi', 'JavaScript')->first()->id,
        ]);

        $budi->kompetensi()->attach([
            Kompetensi::where('nama_kompetensi', 'HTML')->first()->id,
            Kompetensi::where('nama_kompetensi', 'Laravel')->first()->id,
        ]);

        $citra->kompetensi()->attach([
            Kompetensi::where('nama_kompetensi', 'CSS')->first()->id,
            Kompetensi::where('nama_kompetensi', 'Laravel')->first()->id,
        ]);
    }
}