<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $table = 'shift';
    protected $fillable = ['staff_id', 'cash_drawer', 'saldo_awal', 'saldo_akhir', 'catatan', 'waktu_mulai', 'waktu_akhir'];
    public $timestamps = true;
}
