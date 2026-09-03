@extends('layouts.app')

@section('title', 'Detail Perusahaan')

@section('content')

<div class="container">

    <h3>Detail Perusahaan</h3>

    <div class="card">
        <div class="card-body">

            <p>
                <strong>Nama Perusahaan:</strong>
                {{ $perusahaan->nama_perusahaan }}
            </p>

            <p>
                <strong>Alamat:</strong>
                {{ $perusahaan->alamat }}
            </p>


        <div class="mb-3">
    <strong>Telepon:</strong>
    {{ $perusahaan->telepon ?? '-' }}
</div>

            <p>
                <strong>Nama Pembimbing:</strong>
                {{ $perusahaan->nama_pembimbing_industri }}
            </p>


            <p>
                <strong>Bidang Usaha:</strong>
                {{ $perusahaan->bidang_usaha }}
            </p>

            <a href="{{ route('perusahaan.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </div>
    </div>

</div>

@endsection