<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $fillable = ['staff_id', 'tanggal_transaksi', 'total', 'metode_pembayaran', 'nama_pelanggan', 'diskon_total', 'pajak_total', 'keterangan'];
    public $timestamps = true;

    public function staff()
{
    return $this->belongsTo(Pengguna::class, 'staff_id');
    
}
public function details()
{
    return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
}

}
