<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'p_id';
    protected $fillable = [
        'p_provider', 
        'p_kategori', 
        'p_isi', 
        'p_stok',
        'p_harga',
    ];
    public function transaksi()
    {

        return $this->hasMany(\App\Transaksi::class);

    }
}
