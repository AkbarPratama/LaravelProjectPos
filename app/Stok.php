<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
    protected $table = 'stok';

    protected $fillable = ['stok','detail'];

    public function produk()
    {
    	return $this->	belongsTo('App\Produk');
    }
}
