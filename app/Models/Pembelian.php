<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';
    protected $fillable = ['supplier_id', 'staff_id', 'tanggal_pembelian', 'total_harga', 'keterangan'];
    public $timestamps = true;
}
