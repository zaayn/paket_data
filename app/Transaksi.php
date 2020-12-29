<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 't_id';
    protected $fillable = [
        'id', 
        'p_id', 
        't_jumlah_brg', 
        't_pembayaran',
        't_total',
        't_status',
    ];
    public function user()
    {
        return $this->belongsTo(\App\User::class,'id','id');
    }
    public function produk()
    {
        return $this->belongsTo(\App\Produkk::class,'p_id','p_id');
    }
}
