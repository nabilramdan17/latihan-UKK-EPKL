@extends('layouts.app')

@section('title', 'Edit Siswa - E-PKL')

@section('content')

<h1 class="fw-bold mb-4">Edit Siswa</h1>

<div class="card shadow-sm">
    <div class="card-body">

```
    <form action="{{ route('siswa.update', $siswa->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">NIS</label>

            <input type="text"
                   name="nis"
                   class="form-control"
                   value="{{ $siswa->nis }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Siswa</label>

            <input type="text"
                   name="nama"
                   class="form-control"
                   value="{{ $siswa->nama }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kelas</label>

            <input type="text"
                   name="kelas"
                   class="form-control"
                   value="{{ $siswa->kelas }}"
                   required>
        </div>

        {{-- Tanggal Mulai PKL --}}
        <div class="mb-3">
            <label class="form-label">
                Tanggal Mulai
            </label>

            <input type="date"
                   name="tanggal_mulai_pkl"
                   class="form-control"
                   value="{{ $siswa->tanggal_mulai_pkl }}"
                   required>
        </div>

        {{-- Tanggal Selesai PKL --}}
        <div class="mb-3">
            <label class="form-label">
                Tanggal Selesai
            </label>

            <input type="date"
                   name="tanggal_selesai_pkl"
                   class="form-control"
                   value="{{ $siswa->tanggal_selesai_pkl }}"
                   required>
        </div>

        {{-- Perusahaan --}}
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

                    <option value="{{ $item->id }}"
                        {{ $siswa->perusahaan_id == $item->id ? 'selected' : '' }}>

                        {{ $item->nama_perusahaan }}

                    </option>

                @endforeach

            </select>
        </div>

        {{-- Kompetensi --}}
        <div class="mb-3">
            <label class="form-label">
                Kompetensi
            </label>

            <select name="kompetensi_id"
                    class="form-select"
                    required>

                <option value="">
                    -- Pilih Kompetensi --
                </option>

                @foreach ($kompetensi as $item)

                    <option value="{{ $item->id }}"
                        {{ $siswa->kompetensi_id == $item->id ? 'selected' : '' }}>

                        {{ $item->nama_kompetensi }}

                    </option>

                @endforeach

            </select>
        </div>

        <button type="submit"
                class="btn btn-primary">
            Simpan Perubahan
        </button>

        <a href="{{ route('siswa.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>
```

</div>

@endsection
