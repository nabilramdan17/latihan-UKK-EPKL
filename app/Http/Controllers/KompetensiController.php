<?php

namespace App\Http\Controllers;

use App\Models\Kompetensi;
use Illuminate\Http\Request;

class KompetensiController extends Controller
{
    public function index()
    {
        $kompetensi = Kompetensi::all();

        $judulHalaman = 'Daftar Kompetensi';

        return view('kompetensi.index', compact(
            'kompetensi',
            'judulHalaman'
        ));
    }

    public function create()
    {
        return view('kompetensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
        ]);

        Kompetensi::create([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        return view('kompetensi.edit', compact('kompetensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_kompetensi' => 'required',
            'deskripsi' => 'required',
        ]);

        $kompetensi = Kompetensi::findOrFail($id);

        $kompetensi->update([
            'nama_kompetensi' => $request->nama_kompetensi,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $kompetensi = Kompetensi::findOrFail($id);

        $kompetensi->delete();

        return redirect()
            ->route('kompetensi.index')
            ->with('success', 'Kompetensi berhasil dihapus.');
    }
}