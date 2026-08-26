@extends('layouts.app')

@section('title', 'Daftar Perusahaan - E-PKL')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h1 class="fw-bold">{{ $judulHalaman }}</h1>

        <p class="text-muted mb-0">
            Daftar perusahaan mitra tempat siswa melaksanakan PKL.
        </p>
    </div>

    <a href="/" class="btn btn-outline-primary">
        Kembali
    </a>

</div>

<div class="card shadow-sm border-0">
    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead class="table-success">

                    <tr>
                        <th>No</th>
                        <th>Nama Perusahaan</th>
                        <th>Bidang Usaha</th>
                        <th>Jumlah Perusahaan</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

               <tbody>

    @foreach ($perusahaan as $item)

        <tr>

            <td>{{ $loop->iteration }}</td>

            <td>{{ $item->nama_perusahaan }}</td>

            <td>{{ $item->alamat }}</td>

            <td>{{ $item->telepon }}</td>

            <td>

                <a href="{{ route('perusahaan.edit', $item->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('perusahaan.destroy', $item->id) }}"
                      method="POST"
                      style="display:inline"
                      onsubmit="return confirm('Yakin ingin menghapus perusahaan ini?')">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm">
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