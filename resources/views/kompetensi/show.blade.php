@extends('layouts.app')

@section('title', $judulHalaman)

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">{{ $judulHalaman }}</h5>
            </div>

            <div class="card-body">

                <table class="table table-bordered">

                    <tr>
                        <th width="35%">ID Kompetensi</th>
                        <td>{{ $kompetensi->id }}</td>
                    </tr>

                    <tr>
                        <th>Nama Kompetensi</th>
                        <td>{{ $kompetensi->nama_kompetensi }}</td>
                    </tr>

                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $kompetensi->deskripsi }}</td>
                    </tr>

                    <tr>
                        <th>Dibuat Pada</th>
                        <td>{{ $kompetensi->created_at->format('d M Y H:i') }}</td>
                    </tr>

                    <tr>
                        <th>Terakhir Diubah</th>
                        <td>{{ $kompetensi->updated_at->format('d M Y H:i') }}</td>
                    </tr>

                </table>

                <a href="{{ route('kompetensi.index') }}" class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('kompetensi.edit', $kompetensi->id) }}" class="btn btn-warning">
                    Edit
                </a>

            </div>

        </div>

    </div>
</div>

@endsection