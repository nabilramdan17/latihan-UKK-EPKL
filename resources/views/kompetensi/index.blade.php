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

    <div class="d-flex gap-2">
        <a href="{{ route('kompetensi.create') }}" class="btn btn-primary">
            + Tambah Kompetensi
        </a>

        <a href="{{ url('/') }}" class="btn btn-outline-primary">
            Kembali
        </a>
    </div>

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
                        <th width="50">No</th>
                        <th>Nama Kompetensi</th>
                        <th>Deskripsi</th>
                        <th width="130">Jumlah Siswa</th>
                        <th width="250">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse ($kompetensi as $item)

                        <tr>

                            {{-- No --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>

                            {{-- Nama Kompetensi --}}
                            <td>
                                <strong>
                                    {{ $item->nama_kompetensi }}
                                </strong>

                                @if ($item->nama_kompetensi == 'Pemrograman Web')

                                    <span class="badge bg-primary">
                                        Unggulan
                                    </span>

                                @endif
                            </td>

                            {{-- Deskripsi --}}
                            <td>
                                {{ $item->deskripsi }}
                            </td>

                            {{-- Jumlah Siswa --}}
                           <td>
    <span class="badge bg-primary">
        {{ $item->siswa_count }} Siswa
    </span>
</td>

                            {{-- Aksi --}}
                            <td class="text-nowrap">

                                <a href="{{ route('kompetensi.show', $item->id) }}"
                                   class="btn btn-info btn-sm">
                                    Detail
                                </a>

                                <a href="{{ route('kompetensi.edit', $item->id) }}"
                                   class="btn btn-warning btn-sm ms-1">
                                    Edit
                                </a>

                                <form action="{{ route('kompetensi.destroy', $item->id) }}"
                                      method="POST"
                                      class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-danger btn-sm ms-1"
                                            onclick="return confirm('Yakin ingin menghapus kompetensi ini?')">
                                        Hapus
                                    </button>

                                </form>

                            </td>

                        </tr>

                    @empty

                        <tr>
                            <td colspan="5"
                                class="text-center text-muted py-4">
                                Belum ada data kompetensi.
                            </td>
                        </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection