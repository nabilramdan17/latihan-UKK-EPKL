@extends('layouts.app')

@section('title', 'Daftar Kompetensi - E-PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold">{{ $judulHalaman }}</h1>

        <p class="text-muted mb-0">
            Kelola data kompetensi PKL.
        </p>
    </div>

    <a href="{{ route('kompetensi.create') }}"
       class="btn btn-primary">
        + Tambah Kompetensi
    </a>

</div>

{{-- Pesan sukses --}}
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}

        <button type="button"
                class="btn-close"
                data-bs-dismiss="alert">
        </button>
    </div>
@endif

<div class="card shadow-sm border-0">

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-warning">

                    <tr>
                        <th>No</th>
                        <th>Nama Kompetensi</th>
                        <th>Deskripsi</th>
                        <th width="250">Aksi</th>
                    </tr>

                </thead>

              <tbody>
    @foreach ($kompetensi as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>

            <td>
                <strong>{{ $item->nama_kompetensi }}</strong>

                @if ($item->nama_kompetensi == 'Pemrograman Web')
                    <span class="badge bg-primary">Unggulan</span>
                @endif
            </td>

            <td>
                {{ $item->deskripsi }}
            </td>

            <td>
                <a href="{{ route('kompetensi.edit', $item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('kompetensi.destroy', $item->id) }}"
                      method="POST"
                      style="display:inline;"
                      onsubmit="return confirm('Yakin ingin menghapus kompetensi ini?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
</tbody>

            </table>

        </div>

    </div>

</div>

@endsection