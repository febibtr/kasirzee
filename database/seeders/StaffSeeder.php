<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    public function run()
    {
        DB::table('staff')->insert([
            ['id' => 1, 'pengguna_id' => 1, 'nama' => 'Kasir 1', 'nomor_hp' => '081234567893', 'email' => 'kasir1@kasir.com', 'alamat' => 'Jl. Kasir 1', 'role' => 'kasir', 'password' => bcrypt('kasir1')],
            ['id' => 2, 'pengguna_id' => 1, 'nama' => 'Kasir 2', 'nomor_hp' => '081234567894', 'email' => 'kasir2@kasir.com', 'alamat' => 'Jl. Kasir 2', 'role' => 'kasir', 'password' => bcrypt('kasir2')],
            // Tambahkan data lain sesuai dengan dump
        ]);
    }
}
