<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        DB::table('transaksi')->insert([
            ['id' => 1, 'staff_id' => 1, 'tanggal_transaksi' => now(), 'total' => 55000.00, 'metode_pembayaran' => 'tunai', 'nama_pelanggan' => 'Bob Smith', 'diskon_total' => 0.00, 'pajak_total' => 10.00, 'keterangan' => 'Pembelian makanan dan minuman'],
            // Tambahkan data lain sesuai dengan dump
        ]);
    }
}
