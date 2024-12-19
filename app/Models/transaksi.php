<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'siswa_id',
        'buku_id',
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
    ];

    public function siswa()
    {
        return $this->belongsTo(siswa::class);
    }

    public function buku()
    {
        return $this->belongsTo(buku::class);
    }
}
