@extends('layouts.app')

@section('title', 'Tambah Siswa - E-PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="fw-bold">Tambah Siswa</h1>
        <p class="text-muted mb-0">
            Tambahkan data siswa PKL.
        </p>
    </div>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        <form action="{{ route('siswa.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">NIS</label>

                <input type="text"
                       name="nis"
                       class="form-control"
                       value="{{ old('nis') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nama Siswa</label>

                <input type="text"
                       name="nama"
                       class="form-control"
                       value="{{ old('nama') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Kelas</label>

                <input type="text"
                       name="kelas"
                       class="form-control"
                       placeholder="Contoh: XI PPLG 2"
                       value="{{ old('kelas') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Tanggal Mulai PKL
                </label>

                <input type="date"
                       name="tanggal_mulai_pkl"
                       class="form-control"
                       value="{{ old('tanggal_mulai_pkl') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Tanggal Selesai PKL
                </label>

                <input type="date"
                       name="tanggal_selesai_pkl"
                       class="form-control"
                       value="{{ old('tanggal_selesai_pkl') }}"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Perusahaan
                </label>

                <select name="perusahaan_id"
                        class="form-select"
                        required>

                    <option value="">
                        -- Pilih Perusahaan --
                    </option>

                    @foreach ($perusahaan as $item)

                        <option value="{{ $item->id }}">
                            {{ $item->nama_perusahaan }}
                        </option>

                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('siswa.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection