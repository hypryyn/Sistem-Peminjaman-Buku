<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model name
    protected $table = 'siswa';

    // Specify which columns can be mass-assigned
    protected $fillable = ['nis', 'nama', 'alamat', 'nohp', 'jeniskelamin', 'hobi'];

    /**
     * Define a relationship with the transaksi model.
     *
     * Each siswa can have many transaksis.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transaksis()
    {
        return $this->hasMany(transaksi::class, 'siswa_id', 'id');
    }
}
