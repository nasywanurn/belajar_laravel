<?php

namespace Database\Seeders;

use App\Models\Biodata;
use App\Models\Barang;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\Pesanan;
use App\Models\Suplier;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(BiodataSeeder::class);
        $this->call(BarangSeeder::class);
        $this->call(PembelianSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(SuplierSeeder::class);
        $this->call(PesananSeeder::class);
    }
}
