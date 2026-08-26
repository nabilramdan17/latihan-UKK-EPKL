<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaan = Perusahaan::all();

        $judulHalaman = 'Daftar Perusahaan';

        return view('perusahaan.index', compact(
            'perusahaan',
            'judulHalaman'
        ));
    }

    public function create()
    {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);

        return view('perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
        ]);

        $perusahaan = Perusahaan::findOrFail($id);

        $perusahaan->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);

        $perusahaan->delete();

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Data perusahaan berhasil dihapus.');
    }
}