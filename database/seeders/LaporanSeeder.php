<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaporanSeeder extends Seeder
{
    public function run()
    {
        DB::table('laporan')->insert([
            // Tambahkan data jika diperlukan
        ]);
    }
}
