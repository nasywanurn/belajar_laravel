<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $barang = [
            ['nama' =>'Laptop',
             'varian' =>'A0010',
             'harga_beli' =>'Rp.9.000.000',
             'harga_jual' =>'Rp.9.000.000'
            ],
            ['nama' =>'Laptop',
             'varian' =>'A0020',
             'harga_beli' =>'Rp.8.000.000',
             'harga_jual' =>'Rp.8.000.000'
            ],
            ['nama' =>'Laptop',
             'varian' =>'B0010',
             'harga_beli' =>'Rp.7.000.000',
             'harga_jual' =>'Rp.7.000.000'
            ],
            ['nama' =>'Laptop',
             'varian' =>'B0010',
             'harga_beli' =>'Rp.6.000.000',
             'harga_jual' =>'Rp.6.000.000'
            ],
            ['nama' =>'Laptop',
             'varian' =>'C0010',
             'harga_beli' =>'Rp.5.000.000',
             'harga_jual' =>'Rp.5.000.000'
            ]
        ];
        DB::table('barangs')->insert($barang);
    }
}
