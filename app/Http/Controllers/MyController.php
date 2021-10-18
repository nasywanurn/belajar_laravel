<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    public function latihan()
    {
        $result = "Latihan Controller";
        return view('latihan', compact('result'));
    }

    public function biodata()
    {
        $nama = "Nasywa";
        $hobi = "Membaca";
        $alamat = "Rancamanyar";
        $tglLahir = "Bandung 5 Mei 2004";
        $umur = "17 Tahun";
        return view('latihan', compact('nama', 'hobi', 'alamat', 'tglLahir', 'umur'));
    }

}
