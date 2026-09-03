@extends('layouts.app')

@section('title', 'Tambah Siswa')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    Tambah Siswa
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ route('siswa.store') }}" method="POST">

                    @csrf

                      <div class="mb-3">
    <label for="nis" class="form-label">
        NIS
    </label>

    <input type="text"
           name="nis"
           id="nis"
           class="form-control"
           value="{{ old('nis') }}"
           required>
</div>

<div class="mb-3">
    <label for="nama" class="form-label">
        Nama Siswa
    </label>

    <input type="text"
           name="nama"
           id="nama"
           class="form-control"
           value="{{ old('nama') }}"
           required>
</div>

<div class="mb-3">
    <label for="kelas" class="form-label">
        Kelas
    </label>

    <input type="text"
           name="kelas"
           id="kelas"
           class="form-control"
           value="{{ old('kelas') }}"
           required>
</div>

<div class="mb-3">
    <label for="perusahaan_id" class="form-label">
        Perusahaan
    </label>

    <select name="perusahaan_id"
            id="perusahaan_id"
            class="form-select"
            required>

        <option value="">-- Pilih Perusahaan --</option>

        @foreach ($perusahaan as $item)
            <option value="{{ $item->id }}">
                {{ $item->nama_perusahaan }}
            </option>
        @endforeach

    </select>
</div>

<div class="mb-3">
    <label class="form-label">
        Kompetensi
    </label>

    @foreach ($kompetensi as $item)

        <div class="form-check">

            <input 
                type="checkbox" 
                name="kompetensi[]" 
                value="{{ $item->id }}" 
                class="form-check-input" 
                id="kompetensi{{ $item->id }}">

            <label 
                class="form-check-label" 
                for="kompetensi{{ $item->id }}">

                {{ $item->nama_kompetensi }}

            </label>

        </div>

    @endforeach
</div>

<div class="mb-3">
    <label for="tanggal_mulai_pkl" class="form-label">
        Tanggal Mulai PKL
    </label>

    <input type="date"
           name="tanggal_mulai_pkl"
           id="tanggal_mulai_pkl"
           class="form-control"
           value="{{ old('tanggal_mulai_pkl') }}"
           required>
</div>

<div class="mb-3">
    <label for="tanggal_selesai_pkl" class="form-label">
        Tanggal Selesai PKL
    </label>

    <input type="date"
           name="tanggal_selesai_pkl"
           id="tanggal_selesai_pkl"
           class="form-control"
           value="{{ old('tanggal_selesai_pkl') }}"
           required>
</div>


<a href="{{ route('siswa.index') }}"
   class="btn btn-secondary">
    Kembali
</a>

                    <button type="submit"
                            class="btn btn-primary">
                        Simpan
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

@endsection