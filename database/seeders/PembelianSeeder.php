<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembelian = [
            ['nama_barang' =>'Laptop',
             'nama_supplier' =>'',
             'qty' =>10,
             'tgl' =>'01-01-2020'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'',
            'qty' =>20,
            'tgl' =>'02-01-2020'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'',
            'qty' =>10,
            'tgl' =>'03-01-2020'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'',
            'qty' =>20,
            'tgl' =>'04-01-2020'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'',
            'qty' =>10,
            'tgl' =>'05-01-2020'
            ],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
