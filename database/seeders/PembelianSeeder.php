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
             'nama_supplier' =>'Rizky',
             'qty' =>10,
             'tgl' =>'2020-01-01'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'Fadli',
            'qty' =>20,
            'tgl' =>'2020-02-02'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'Fadhil',
            'qty' =>10,
            'tgl' =>'2020-01-03'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'Kia',
            'qty' =>20,
            'tgl' =>'2020-03-04'
            ],
            ['nama_barang' =>'Laptop',
            'nama_supplier' =>'Dhea',
            'qty' =>10,
            'tgl' =>'2020-02-06'
            ],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
