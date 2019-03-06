<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Refund extends Model
{
    protected $table = 'refund';

    protected $fillable = ['detail','tgl_refund'];

    public function transaksi()
    {
    	return $this->belongsTo(Transaksi::class);
    }
}
