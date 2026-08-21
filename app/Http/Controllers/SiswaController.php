<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswa extends Controller
{
   public function index()
    {
      

        return view('Siswa.index');
    }

}
