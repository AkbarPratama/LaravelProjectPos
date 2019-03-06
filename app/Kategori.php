<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori','merk','detail'];

    public function produk()
    {
    	return $this->hasMany(Produk::class);
    }
}
