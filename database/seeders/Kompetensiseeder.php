<?php

namespace Database\Seeders;

use App\Models\Kompetensi;
use Illuminate\Database\Seeder;

class KompetensiSeeder extends Seeder
{
    public function run(): void
    {
        $kompetensi = [
            [
                'nama_kompetensi' => 'HTML',
                'deskripsi' => 'Mampu membuat struktur halaman web menggunakan HTML.',
            ],
            [
                'nama_kompetensi' => 'CSS',
                'deskripsi' => 'Mampu membuat tampilan halaman web menggunakan CSS.',
            ],
            [
                'nama_kompetensi' => 'JavaScript',
                'deskripsi' => 'Mampu membuat interaksi pada halaman web menggunakan JavaScript.',
            ],
            [
                'nama_kompetensi' => 'PHP',
                'deskripsi' => 'Mampu membuat aplikasi web menggunakan PHP.',
            ],
            [
                'nama_kompetensi' => 'Laravel',
                'deskripsi' => 'Mampu mengembangkan aplikasi web menggunakan Laravel.',
            ],
            [
                'nama_kompetensi' => 'MySQL',
                'deskripsi' => 'Mampu mengelola database MySQL.',
            ],
            [
                'nama_kompetensi' => 'Git',
                'deskripsi' => 'Mampu menggunakan Git untuk version control.',
            ],
            [
                'nama_kompetensi' => 'Bootstrap',
                'deskripsi' => 'Mampu membuat tampilan web menggunakan Bootstrap.',
            ],
        ];

        foreach ($kompetensi as $item) {
            Kompetensi::create($item);
        }
    }
}