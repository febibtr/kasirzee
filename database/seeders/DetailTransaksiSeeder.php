<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailTransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('detail_transaksi')->insert([
            ['id' => 1, 'transaksi_id' => 1, 'produk_id' => 1, 'jumlah' => 2, 'harga_satuan' => 10000.00, 'total_harga' => 20000.00],

        ]);
    }
}
