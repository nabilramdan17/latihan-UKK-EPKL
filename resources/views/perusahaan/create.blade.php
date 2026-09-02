@extends('layouts.app')

@section('title', 'Tambah Perusahaan')

@section('content')

<div class="row justify-content-center">

    <div class="col-md-8">

        <div class="card shadow-sm">

            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">
                    Tambah Perusahaan
                </h5>
            </div>

            <div class="card-body">

                <form action="{{ route('perusahaan.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label class="form-label">
                            Nama Perusahaan
                        </label>

                        <input type="text"
                               name="nama_perusahaan"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Alamat
                        </label>

                        <textarea name="alamat"
                                  class="form-control"
                                  rows="3"
                                  required></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Jumlah Perusahaan
                        </label>

                        <input type="number"
                               name="jumlah_perusahaan"
                               class="form-control"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Bidang Usaha
                        </label>

                        <input type="text"
                               name="bidang_usaha"
                               class="form-control"
                               required>
                    </div>

                    <a href="{{ route('perusahaan.index') }}"
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