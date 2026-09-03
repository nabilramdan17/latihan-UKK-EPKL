<?php

namespace App\Http\Controllers;

use App\Models\Perusahaan;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    public function index()
{
    $perusahaan = Perusahaan::withCount('siswas')->get();

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
            'nama_perusahaan' => 'required|string|max:100',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'bidang_usaha' => 'required|string|max:100',
            'nama_pembimbing_industri' => 'nullable|string|max:100',
        ]);

        Perusahaan::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'bidang_usaha' => $request->bidang_usaha,
            'nama_pembimbing_industri' => $request->nama_pembimbing_industri,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Perusahaan berhasil ditambahkan.');
    }

    public function show($id)
    {
        $perusahaan = Perusahaan::with('siswas')->findOrFail($id);

        return view('perusahaan.show', compact('perusahaan'));
    }

    public function edit($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);

        return view('perusahaan.edit', compact('perusahaan'));
    }

    public function update(Request $request, $id)
    {
        $perusahaan = Perusahaan::findOrFail($id);

        $request->validate([
            'nama_perusahaan' => 'required|string|max:100',
            'alamat' => 'required|string',
            'telepon' => 'nullable|string|max:20',
            'bidang_usaha' => 'required|string|max:100',
            'nama_pembimbing_industri' => 'nullable|string|max:100',
        ]);

        $perusahaan->update([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'bidang_usaha' => $request->bidang_usaha,
            'nama_pembimbing_industri' => $request->nama_pembimbing_industri,
        ]);

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Perusahaan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $perusahaan = Perusahaan::findOrFail($id);

        $perusahaan->delete();

        return redirect()
            ->route('perusahaan.index')
            ->with('success', 'Perusahaan berhasil dihapus.');
    }
}