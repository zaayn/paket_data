<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 't_id';
    protected $fillable = [
        'id', 
        'p_id', 
        'no_hp', 
        't_total',
        't_status',
        't_file',
    ];
    public function user()
    {
        return $this->belongsTo(\App\User::class,'id','id');
    }
    public function produk()
    {
        return $this->belongsTo(\App\Produk::class,'p_id','p_id');
    }
}
