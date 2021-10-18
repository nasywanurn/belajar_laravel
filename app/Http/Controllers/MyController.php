<?php

namespace App\Http\Controllers;

use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Suplier;
use App\Models\Pesanan;
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

    public function bio(){
        //mengambil semua data dari model Biodata
        $bio = Biodata::all();
        return view('biodata', compact('bio'));
    }

    public function barang(){
        //mengambil semua data dari model Biodata
        $barang = Barang::all();
        return view('barang', compact('barang'));
    }

    public function pembeli(){
        //mengambil semua data dari model Biodata
        $pembeli = Pembeli::all();
        return view('pembeli', compact('pembeli'));
    }

    public function pembelian(){
        //mengambil semua data dari model Biodata
        $pembelian = Pembelian::all();
        return view('pembelian', compact('pembelian'));
    }

    public function suplier(){
        //mengambil semua data dari model Biodata
        $suplier = Suplier::all();
        return view('suplier', compact('suplier'));
    }

    public function pesanan(){
        //mengambil semua data dari model Biodata
        $pesanan = Pesanan::all();
        return view('pesanan', compact('pesanan'));
    }

}
