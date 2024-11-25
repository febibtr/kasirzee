<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        DB::table('pengguna')->insert([
            ['id' => 1, 'nama' => 'Andi', 'email' => 'andi@example.com', 'password' => bcrypt('andi123'), 'nomor_hp' => '081234567890', 'tanggal_daftar' => now()],
            // Tambahkan data lain sesuai dengan dump
        ]);
    }
}
