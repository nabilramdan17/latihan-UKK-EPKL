@extends('layouts.app')

@section('title', 'Edit Perusahaan - E-PKL')

@section('content')

<h1 class="fw-bold mb-4">Edit Perusahaan</h1>

<div class="card">
    <div class="card-body">

        <form action="{{ route('perusahaan.update', $perusahaan->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">
                    Nama Perusahaan
                </label>

                <input type="text"
                       name="nama_perusahaan"
                       class="form-control"
                       value="{{ $perusahaan->nama_perusahaan }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Alamat
                </label>

                <textarea name="alamat"
                          class="form-control"
                          rows="3"
                          required>{{ $perusahaan->alamat }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    jumlah perusahaan
                </label>

                <input type="text"
                       name="telepon"
                       class="form-control"
                       value="{{ $perusahaan->telepon }}"
                       required>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan Perubahan
            </button>

            <a href="{{ route('perusahaan.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection