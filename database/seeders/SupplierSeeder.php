<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('supplier')->insert([
            ['id' => 1, 'nama' => 'Supplier A', 'alamat' => 'Jl. Supplier A No. 1', 'nomor_hp' => '081234567891', 'email' => 'supplierA@example.com'],
            ['id' => 2, 'nama' => 'Supplier B', 'alamat' => 'Jl. Supplier B No. 2', 'nomor_hp' => '081234567892', 'email' => 'supplierB@example.com'],
        ]);
    }
}
