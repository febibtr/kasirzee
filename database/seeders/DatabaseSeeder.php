<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call([
            PenggunaSeeder::class,
            KategoriSeeder::class,
            LaporanSeeder::class,
            ProdukSeeder::class,
            StaffSeeder::class,
            SupplierSeeder::class,
            PembelianSeeder::class,
            ShiftSeeder::class,
            TokoSeeder::class,
            TransaksiSeeder::class,
            DetailTransaksiSeeder::class,
        ]);
    }
}
