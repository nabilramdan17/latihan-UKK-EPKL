<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perusahaan;

class PerusahaanController extends Controller
{
    public function index()
    {
      

        return view('perusahaan.index');
    }

    public function show($id)
    {
        return 'Menampilkan detail perusahaan dengan ID: ' . $id;
    }
}