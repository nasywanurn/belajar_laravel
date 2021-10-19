<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pesanan = [
            ['nama_pelanggan' =>'Nana',
             'nama_barang' =>'Laptop',
             'qty' =>20,
             'tgl_pesan' =>'2021-02-03'],
            ['nama_pelanggan' =>'Nayla',
            'nama_barang' =>'Laptop',
            'qty' =>10,
            'tgl_pesan' =>'2021-02-09'],
            ['nama_pelanggan' =>'Lulu',
            'nama_barang' =>'',
            'qty' =>20,
            'tgl_pesan' =>'2021-02-03'],
            ['nama_pelanggan' =>'Leo',
            'nama_barang' =>'Laptop',
            'qty' =>10,
            'tgl_pesan' =>'2021-04-03'],
            ['nama_pelanggan' =>'Nadia',
            'nama_barang' =>'Laptop',
            'qty' =>20,
            'tgl_pesan' =>'2021-01-05']
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
