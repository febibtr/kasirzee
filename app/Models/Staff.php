<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff'; // Nama tabel

    protected $fillable = [
        'pengguna_id',
        'nama',
        'nomor_hp',
        'email',
        'alamat',
        'role',
        'password',
    ];

    // Definisikan relasi jika diperlukan
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'pengguna_id');
    }
}
