@extends('layouts.app')

@section('title', 'Edit Perusahaan - E-PKL')

@section('content')

<div class="container">

    <h1 class="fw-bold mb-4">Edit Perusahaan</h1>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <form action="{{ route('perusahaan.update', $perusahaan->id) }}" method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama_perusahaan" class="form-label">
                        Nama Perusahaan
                    </label>

                    <input type="text"
                           name="nama_perusahaan"
                           id="nama_perusahaan"
                           class="form-control"
                           value="{{ old('nama_perusahaan', $perusahaan->nama_perusahaan) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label for="alamat" class="form-label">
                        Alamat
                    </label>

                    <textarea name="alamat"
                              id="alamat"
                              class="form-control"
                              rows="3"
                              required>{{ old('alamat', $perusahaan->alamat) }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="jumlah_perusahaan" class="form-label">
                        Jumlah Perusahaan
                    </label>

                    <input type="number"
                           name="jumlah_perusahaan"
                           id="jumlah_perusahaan"
                           class="form-control"
                           value="{{ old('jumlah_perusahaan', $perusahaan->jumlah_perusahaan) }}"
                           required>
                </div>

                <div class="mb-3">
                    <label for="bidang_usaha" class="form-label">
                        Bidang Usaha
                    </label>

                    <input type="text"
                           name="bidang_usaha"
                           id="bidang_usaha"
                           class="form-control"
                           value="{{ old('bidang_usaha', $perusahaan->bidang_usaha) }}"
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

</div>

@endsection