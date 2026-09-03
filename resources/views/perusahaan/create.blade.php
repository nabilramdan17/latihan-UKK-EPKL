@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')

<div class="container">

    <div class="card shadow-sm">

        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Tambah Perusahaan</h5>
        </div>

        <div class="card-body">

            <form action="{{ route('perusahaan.store') }}" method="POST">

                @csrf

                {{-- Nama Perusahaan --}}
                <div class="mb-3">
                    <label class="form-label">Nama Perusahaan</label>

                    <input
                        type="text"
                        name="nama_perusahaan"
                        class="form-control"
                        value="{{ old('nama_perusahaan') }}"
                        required
                    >
                </div>

                {{-- Alamat --}}
                <div class="mb-3">
                    <label class="form-label">Alamat</label>

                    <textarea
                        name="alamat"
                        class="form-control"
                        rows="3"
                        required
                    >{{ old('alamat') }}</textarea>
                </div>

                {{-- Telepon --}}
                <div class="mb-3">
                    <label class="form-label">Telepon</label>

                    <input
                        type="text"
                        name="telepon"
                        class="form-control"
                        placeholder="Contoh: 022-1234567"
                        value="{{ old('telepon') }}"
                    >
                </div>


                 <div class="mb-3">
                    <label class="form-label">Nama Pembimbing</label>

                    <input
                        type="text"
                        name="nama_pembimbing_industri"
                        class="form-control"
                        value="{{ old('nama_pembimbing_industri') }}"
                        required
                    >
                </div>



                {{-- Bidang Usaha --}}
                <div class="mb-3">
                    <label class="form-label">Bidang Usaha</label>

                    <input
                        type="text"
                        name="bidang_usaha"
                        class="form-control"
                        value="{{ old('bidang_usaha') }}"
                        required
                    >
                </div>

                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        Simpan
                    </button>

                    <a href="{{ route('perusahaan.index') }}"
                       class="btn btn-secondary">
                        Kembali
                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

@endsection