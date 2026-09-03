@extends('layouts.app')

@section('title', 'Daftar Siswa - E-PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h1 class="fw-bold">{{ $judulHalaman }}</h1>
        <p class="text-muted mb-0">
            Daftar siswa yang mengikuti kegiatan PKL.
        </p>
    </div>

    <div>
        <a href="{{ route('siswa.create') }}"
           class="btn btn-primary">
            + Tambah Siswa
        </a>

        <a href="/"
           class="btn btn-outline-primary">
            Kembali
        </a>
    </div>
</div>


<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">

                <thead class="table-primary">
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Perusahaan</th>
                        <th>Kompetensi</th>
                        <th>Aksi</th> 



                    </tr>
                </thead>

                <tbody>

@foreach ($siswa as $item)

    <tr>

        <td>{{ $loop->iteration }}</td>

        <td>{{ $item->nis }}</td>

        <td>{{ $item->nama }}</td>

        <td>{{ $item->kelas }}</td>

        <td>
            {{ $item->tanggal_mulai_pkl }}
        </td>

        <td>
            {{ $item->tanggal_selesai_pkl }}
        </td>

        <td>
            {{ $item->perusahaan->nama_perusahaan ?? '-' }}
        </td>
    <td>
    @if($item->kompetensi->count() > 0)
        @foreach($item->kompetensi as $kompetensi)
            <span class="badge bg-primary">
                {{ $kompetensi->nama_kompetensi }}
            </span>
        @endforeach
    @else
        <span class="text-muted">Belum dipilih</span>
    @endif
</td>
        

      <td>
    <div class="d-flex gap-2">
        
        <a href="{{ route('siswa.show', $item->id) }}"
           class="btn btn-info btn-sm">
            Detail
        </a>

        <a href="{{ route('siswa.edit', $item->id) }}"
           class="btn btn-warning btn-sm">
            Edit
        </a>

        <form action="{{ route('siswa.destroy', $item->id) }}"
              method="POST"
              class="m-0"
              onsubmit="return confirm('Yakin ingin menghapus siswa ini?')">

            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger btn-sm">
                Hapus
            </button>

        </form>

    </div>
</td>

    </tr>

@endforeach

</tbody>
            </table>
        </div>

    </div>
</div>

@endsection