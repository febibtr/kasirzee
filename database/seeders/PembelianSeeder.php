<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pembelian')->insert([
            ['id' => 1, 'supplier_id' => 1, 'staff_id' => 1, 'tanggal_pembelian' => '2024-11-01 10:00:00', 'total_harga' => 500000.00, 'keterangan' => 'Pembelian barang dari Supplier A'],
            ['id' => 2, 'supplier_id' => 2, 'staff_id' => 2, 'tanggal_pembelian' => '2024-11-01 11:00:00', 'total_harga' => 300000.00, 'keterangan' => 'Pembelian barang dari Supplier B'],
        ]);
    }
}
