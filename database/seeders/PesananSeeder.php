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
             'tgl_pesan' =>'01-02-2021'],
            ['nama_pelanggan' =>'Lala',
            'nama_barang' =>'Laptop',
            'qty' =>10,
            'tgl_pesan' =>'02-02-2021'],
            ['nama_pelanggan' =>'Lulu',
            'nama_barang' =>'',
            'qty' =>20,
            'tgl_pesan' =>'03-02-2021'],
            ['nama_pelanggan' =>'Leo',
            'nama_barang' =>'Laptop',
            'qty' =>10,
            'tgl_pesan' =>'04-02-2021'],
            ['nama_pelanggan' =>'Nadia',
            'nama_barang' =>'Laptop',
            'qty' =>20,
            'tgl_pesan' =>'05-02-2021']
        ];
        DB::table('pesanans')->insert($pesanan);
    }
}
