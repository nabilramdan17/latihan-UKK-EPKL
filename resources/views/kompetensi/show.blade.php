@extends('layouts.app')

@section('title', 'Detail Kompetensi')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow-sm border-0">

            <div class="card-header bg-info text-white">

                <h5 class="mb-0">
                    Detail Kompetensi
                </h5>

            </div>

            <div class="card-body">

                <h3 class="fw-bold">
                    {{ $kompetensi->nama_kompetensi }}
                </h3>

                <hr>

                <h6 class="text-muted">
                    Deskripsi
                </h6>

                <p>
                    {{ $kompetensi->deskripsi }}
                </p>

                <a href="{{ route('kompetensi.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

                <a href="{{ route('kompetensi.edit', $kompetensi->id) }}"
                   class="btn btn-warning">
                    Edit
                </a>

            </div>

        </div>

    </div>

</div>

@endsection