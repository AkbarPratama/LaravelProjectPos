<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';

    protected $fillable = ['tgl','jumlah','total','produk_id'];

    public function produk()
    {
    	return $this->belongsTo(Produk::class);
    }

    public function refund()
    {
        return $this->hasMany(Refund::class);
    }
}
