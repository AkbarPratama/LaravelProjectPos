<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = ['nama_produk','harga','ukuran','stok','kategori_id'];

    public function kategori()
    {
    	return $this->belongsTo(Kategori::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
    
    public function stok()
    {
        return $this->hasOne(Stok::class);
    }
}
