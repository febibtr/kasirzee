<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['staff_id', 'tanggal_transaksi', 'total', 'metode_pembayaran', 'nama_pelanggan', 'nomor_meja', 'diskon_total', 'pajak_total', 'keterangan'];
    public $timestamps = true;
}
