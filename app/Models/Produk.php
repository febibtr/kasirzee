<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $fillable = ['nama', 'kategori_id', 'tipe', 'stok', 'harga_beli', 'harga_jual', 'berat', 'satuan', 'diskon', 'deskripsi'];
    public $timestamps = true;

    public function kategori()
{
    return $this->belongsTo(Kategori::class, 'kategori_id');
}

}
