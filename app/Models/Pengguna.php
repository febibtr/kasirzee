<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $fillable = ['nama', 'email', 'password', 'nomor_hp', 'referral_kode', 'tanggal_daftar'];
    public $timestamps = true;
}
