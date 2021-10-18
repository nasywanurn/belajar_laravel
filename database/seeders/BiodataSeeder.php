<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $bio = [
            ['name' =>'Nasywa',
            'gender'=>'female',
            'bornDate'=>'2004-05-05',
            'weight'=>50,
            'height'=>170],
            ['name' =>'Nur',
            'gender'=>'female',
            'bornDate'=>'2004-05-05',
            'weight'=>50,
            'height'=>170]
        ];
        DB::table('biodatas')->insert($bio);
    }
}
