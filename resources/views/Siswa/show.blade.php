@extends('layouts.app')

@section('title', 'Detail Siswa')

@section('content')

<div class="container">

```
<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Detail Siswa</h5>
            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th width="35%">NIS</th>
                        <td>{{ $siswa->nis }}</td>
                    </tr>

                    <tr>
                        <th>Nama</th>
                        <td>{{ $siswa->nama }}</td>
                    </tr>

                    <tr>
                        <th>Kelas</th>
                        <td>{{ $siswa->kelas }}</td>
                    </tr>

                    <tr>
                        <th>Tanggal Mulai PKL</th>
                        <td>{{ $siswa->tanggal_mulai_pkl }}</td>
                    </tr>

                    <tr>
                        <th>Tanggal Selesai PKL</th>
                        <td>{{ $siswa->tanggal_selesai_pkl }}</td>
                    </tr>

                    <tr>
                        <th>Perusahaan</th>
                        <td>
                            {{ $siswa->perusahaan->nama_perusahaan ?? '-' }}
                        </td>
                    </tr>

                    <tr>
                        <th>Kompetensi</th>
                        <td>
                            {{ $siswa->kompetensi->nama_kompetensi ?? '-' }}
                        </td>
                    </tr>

                </table>

                <a href="{{ route('siswa.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('siswa.edit', $siswa->id) }}"
                   class="btn btn-warning">
                    Edit
                </a>

            </div>

        </div>

    </div>

</div>
```

</div>

@endsection
