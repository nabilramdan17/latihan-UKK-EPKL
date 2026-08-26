@extends('layouts.app')

@section('title', 'Beranda - E-PKL')

@section('content')

<div class="text-center mb-5">
    <h1 class="display-5 fw-bold text-primary">
        Sistem Informasi E-PKL
    </h1>

    <p class="lead text-muted">
        Sistem Informasi Praktik Kerja Lapangan Siswa
    </p>
</div>

<div class="row g-4">

    {{-- Siswa --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center p-4">
                <h3 class="fw-bold">Siswa</h3>

                <p class="text-muted">
                    Melihat daftar siswa yang mengikuti kegiatan PKL.
                </p>

                <a href="/siswa" class="btn btn-primary">
                    Lihat Siswa
                </a>
            </div>
        </div>
    </div>

    {{-- Perusahaan --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center p-4">
                <h3 class="fw-bold">Perusahaan</h3>

                <p class="text-muted">
                    Melihat daftar perusahaan mitra PKL.
                </p>

                <a href="/perusahaan" class="btn btn-success">
                    Lihat Perusahaan
                </a>
            </div>
        </div>
    </div>

    {{-- Kompetensi --}}
    <div class="col-md-4">
        <div class="card shadow-sm border-0 h-100">
            <div class="card-body text-center p-4">
                <h3 class="fw-bold">Kompetensi</h3>

                <p class="text-muted">
                    Melihat kompetensi yang digunakan dalam kegiatan PKL.
                </p>

                <a href="/kompetensi" class="btn btn-warning">
                    Lihat Kompetensi
                </a>
            </div>
        </div>
    </div>

</div>

@endsection