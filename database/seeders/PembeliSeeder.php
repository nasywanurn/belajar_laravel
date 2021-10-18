<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pembeli = [
            ['nama' =>'Nana',
             'jns_kelamin' =>'Perempuan',
             'alamat' =>'Bandung',
             'kode_pos' =>'12345',
             'kota' =>'Bandung',
             'tgl_lahir' =>'01-01-2003'
            ],
            ['nama' =>'Lala',
             'jns_kelamin' =>'Perempuan',
             'alamat' =>'Jakarta',
             'kode_pos' =>'12346',
             'kota' =>'Jakarta',
             'tgl_lahir' =>'02-01-2003'
            ],
            ['nama' =>'Lulu',
             'jns_kelamin' =>'Perempuan',
             'alamat' =>'Bandung',
             'kode_pos' =>'12347',
             'kota' =>'Bandung',
             'tgl_lahir' =>'03-01-2003'
            ],
            ['nama' =>'Leo',
             'jns_kelamin' =>'Laki-laki',
             'alamat' =>'Jakarta',
             'kode_pos' =>'12348',
             'kota' =>'Jakarta',
             'tgl_lahir' =>'04-01-2003'
            ],
            ['nama' =>'Nadia',
             'jns_kelamin' =>'Perempuan',
             'alamat' =>'Bandung',
             'kode_pos' =>'123',
             'kota' =>'Bandung',
             'tgl_lahir' =>'05-01-2003'
            ],

        ];
        DB::table('pembelis')->insert($pembeli);
    }
}
