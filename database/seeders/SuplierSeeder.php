<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $suplier = [
            ['nama' =>'Rizky',
             'alamat' =>'Bandung',
             'kode_pos' =>'112345',
             'kota' =>'Bandung'],
            ['nama' =>'Fadli',
            'alamat' =>'Jakarta',
            'kode_pos' =>'112346',
            'kota' =>''],
            ['nama' =>'Fadhil',
             'alamat' =>'Bandung',
             'kode_pos' =>'112347',
             'kota' =>'Bandung'],
            ['nama' =>'Kia',
            'alamat' =>'Jakarta',
            'kode_pos' =>'112348',
            'kota' =>'Jakarta'],
            ['nama' =>'Dhea',
             'alamat' =>'Bandung',
             'kode_pos' =>'112349',
             'kota' =>'Bandung']
        ];
        DB::table('supliers')->insert($suplier);
    }
}
