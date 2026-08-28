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
                        <label class="form-label">
                            NIS
                        </label>

                        <input type="text"
                               name="nis"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Siswa
                        </label>

                        <input type="text"
                               name="nama"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Kelas
                        </label>

                        <input type="text"
                               name="kelas"
                               class="form-control"
                               placeholder="Contoh: XI PPLG 2"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Tanggal Mulai PKL
                        </label>

                        <input type="date"
                               name="tanggal_mulai_pkl"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Tanggal Selesai PKL
                        </label>

                        <input type="date"
                               name="tanggal_selesai_pkl"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Perusahaan
                        </label>

                        <select name="perusahaan_id"
                                class="form-control"
                                required>

                            <option value="">
                                -- Pilih Perusahaan --
                            </option>

                            @foreach ($perusahaan as $item)

                                <option value="{{ $item->id }}">
                                    {{ $item->nama_perusahaan }}
                                </option>

                            @endforeach

                        </select>

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