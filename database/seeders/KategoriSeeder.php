<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori')->insert([
            ['id' => 1, 'nama' => 'Makanan', 'deskripsi' => 'Kategori untuk semua jenis makanan.'],
        ]);
    }
}
