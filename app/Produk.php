<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'p_id';
    protected $fillable = [
        'p_nama', 
        'p_kuota', 
        'p_deskripsi', 
        'p_stok',
        'p_harga',
    ];
    public function transaksi()
    {

        return $this->hasMany(\App\Transaksi::class);

    }
}
