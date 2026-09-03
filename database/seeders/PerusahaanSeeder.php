<?php

namespace Database\Seeders;

use App\Models\Perusahaan;
use Illuminate\Database\Seeder;

class PerusahaanSeeder extends Seeder
{
    public function run(): void
    {
        $perusahaan = [
            [
                'nama_perusahaan' => 'PT Sinergi Digital Nusantara',
                'bidang_usaha' => 'Software House',
                'alamat' => 'Jl. Soekarno Hatta No. 10, Bandung',
                'nama_pembimbing_industri' => 'Andi Saputra',
                'jumlah_perusahaan' => 1,
            ],
            [
                'nama_perusahaan' => 'CV Teknologi Bandung',
                'bidang_usaha' => 'Teknologi Informasi',
                'alamat' => 'Jl. Buah Batu No. 20, Bandung',
                'nama_pembimbing_industri' => 'Budi Santoso',
                'jumlah_perusahaan' => 1,
            ],
            [
                'nama_perusahaan' => 'PT Digital Kreatif Indonesia',
                'bidang_usaha' => 'Web Development',
                'alamat' => 'Jl. Asia Afrika No. 15, Bandung',
                'nama_pembimbing_industri' => 'Citra Lestari',
                'jumlah_perusahaan' => 1,
            ],
        ];

        foreach ($perusahaan as $item) {
            Perusahaan::create($item);
        }
    }
}