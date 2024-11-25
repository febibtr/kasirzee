<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['jenis', 'keterangan', 'waktu_laporan'];
    public $timestamps = true;
}
