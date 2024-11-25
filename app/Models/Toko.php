<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    protected $table = 'toko';
    protected $fillable = ['pengguna_id', 'nama_toko', 'jenis_usaha', 'provinsi', 'kota_kabupaten', 'alamat', 'usia_bisnis'];
    public $timestamps = true;
}
