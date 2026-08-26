<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Kompetensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2>Edit Kompetensi</h2>

    <div class="card mt-4">
        <div class="card-body">

            <form action="{{ route('kompetensi.update', $kompetensi->id) }}"
                  method="POST">

                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">
                        Nama Kompetensi
                    </label>

                    <input type="text"
                           name="nama_kompetensi"
                           class="form-control"
                           value="{{ $kompetensi->nama_kompetensi }}"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        Deskripsi
                    </label>

                    <textarea name="deskripsi"
                              class="form-control"
                              rows="4"
                              required>{{ $kompetensi->deskripsi }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Simpan Perubahan
                </button>

                <a href="{{ route('kompetensi.index') }}"
                   class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>

</div>

</body>
</html>