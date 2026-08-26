@extends('layouts.app')

@section('title', 'Tambah Kompetensi - E-PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="fw-bold">Tambah Kompetensi</h1>
        <p class="text-muted mb-0">
            Tambahkan data kompetensi PKL.
        </p>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('kompetensi.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">
                    Nama Kompetensi
                </label>

                <input type="text"
                       name="nama_kompetensi"
                       class="form-control"
                       placeholder="Contoh: Pemrograman Web"
                       value="{{ old('nama_kompetensi') }}"
                       required>

                @error('nama_kompetensi')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Deskripsi
                </label>

                <textarea name="deskripsi"
                          class="form-control"
                          rows="4"
                          placeholder="Masukkan deskripsi kompetensi"
                          required>{{ old('deskripsi') }}</textarea>

                @error('deskripsi')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('kompetensi.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection