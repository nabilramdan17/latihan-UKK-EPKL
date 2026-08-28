<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // TAMPILKAN DATA SISWA
    public function index()
    {
        $siswa = Siswa::with('perusahaan')->get();

        $judulHalaman = 'Daftar Siswa';

        return view('Siswa.index', compact(
            'siswa',
            'judulHalaman'
        ));
    }

    // FORM TAMBAH SISWA
    public function create()
    {
        $perusahaan = Perusahaan::all();

        return view('Siswa.create', compact('perusahaan'));
    }

    // SIMPAN SISWA BARU
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required|unique:siswas,nis',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date|after_or_equal:tanggal_mulai_pkl',
            'perusahaan_id' => 'required|exists:perusahaans,id',
        ]);

        Siswa::create([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
            'perusahaan_id' => $request->perusahaan_id,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Siswa berhasil ditambahkan!');
    }

    // FORM EDIT SISWA
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        $perusahaan = Perusahaan::all();

        $judulHalaman = 'Edit Siswa';

        return view('Siswa.edit', compact(
            'siswa',
            'perusahaan',
            'judulHalaman'
        ));
    }

    // UPDATE DATA SISWA
    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);

        $request->validate([
            'nis' => 'required|unique:siswas,nis,' . $siswa->id,
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date|after_or_equal:tanggal_mulai_pkl',
            'perusahaan_id' => 'required|exists:perusahaans,id',
        ]);

        $siswa->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'kelas' => $request->kelas,
            'tanggal_mulai_pkl' => $request->tanggal_mulai_pkl,
            'tanggal_selesai_pkl' => $request->tanggal_selesai_pkl,
            'perusahaan_id' => $request->perusahaan_id,
        ]);

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }

    // DETAIL SISWA
    public function show($id)
    {
        $siswa = Siswa::with('perusahaan')->findOrFail($id);

        return view('Siswa.show', compact('siswa'));
    }

    // HAPUS SISWA
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}