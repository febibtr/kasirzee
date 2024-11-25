<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    public function run()
    {
        DB::table('toko')->insert([
            ['id' => 1, 'pengguna_id' => 1, 'nama_toko' => 'Toko Makanan Sehat', 'jenis_usaha' => 'Retail', 'provinsi' => 'Jawa Barat', 'kota_kabupaten' => 'Bandung', 'alamat' => 'Jl. Sehat No. 1', 'usia_bisnis' => 2],
        ]);
    }
}

