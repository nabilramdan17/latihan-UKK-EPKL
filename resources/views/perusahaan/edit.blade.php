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

                {{-- Nama Perusahaan --}}
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

                {{-- Alamat --}}
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

                {{-- Telepon --}}
                <div class="mb-3">
                    <label for="telepon" class="form-label">
                        Telepon
                    </label>

                    <input type="text"
                           name="telepon"
                           id="telepon"
                           class="form-control"
                           value="{{ old('telepon', $perusahaan->telepon) }}"
                           placeholder="Contoh: 022-1234567">
                </div>

                
                  <div class="mb-3">
                    <label for="nama_pembimbing_industri" class="form-label">
                        Nama Pembimbing
                    </label>

                    <input type="text"
                           name="nama_pembimbing_industri"
                           id="nama_pembimbing_industri"
                           class="form-control"
                           value="{{ old('nama_pembimbing_industri',
                            $perusahaan->nama_pembimbing_industri) }}"
                           required>
                </div>



                {{-- Bidang Usaha --}}
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