<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    public function run()
    {
        DB::table('shift')->insert([
            ['id' => 1, 'staff_id' => 1, 'cash_drawer' => 50000.00, 'saldo_awal' => 200000.00, 'saldo_akhir' => 250000.00, 'catatan' => 'Shift pagi', 'waktu_mulai' => now(), 'waktu_akhir' => now()],
            // Tambahkan data lain sesuai dengan dump
        ]);
    }
}
