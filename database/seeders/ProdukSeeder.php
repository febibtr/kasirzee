<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produk')->insert([
            ['id' => 1, 'nama' => 'Nasi Goreng', 'kategori_id' => 1, 'tipe' => 'barang', 'stok' => 0, 'harga_beli' => 10000.00, 'harga_jual' => 15000.00, 'berat' => 0.50, 'satuan' => 'porsi', 'diskon' => 0.00, 'deskripsi' => 'Nasi goreng spesial.'],
            // Tambahkan data lain sesuai dengan dump
        ]);
    }
}
