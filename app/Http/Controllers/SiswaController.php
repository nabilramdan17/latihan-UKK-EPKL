<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Perusahaan;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::with('perusahaan')->get();

        $judulHalaman = 'Daftar Siswa';

        return view('siswa.index', compact(
            'siswa',
            'judulHalaman'
        ));
    }

    public function create()
    {
        $perusahaan = Perusahaan::all();

        return view('siswa.create', compact('perusahaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date',
            'perusahaan_id' => 'required',
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
            ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);

        $perusahaan = Perusahaan::all();

        return view('siswa.edit', compact(
            'siswa',
            'perusahaan'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal_mulai_pkl' => 'required|date',
            'tanggal_selesai_pkl' => 'required|date',
            'perusahaan_id' => 'required',
        ]);

        $siswa = Siswa::findOrFail($id);

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
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        $siswa->delete();

        return redirect()
            ->route('siswa.index')
            ->with('success', 'Data siswa berhasil dihapus.');
    }
}