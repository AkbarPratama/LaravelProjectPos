<?php

namespace App\Http\Controllers;

use App\Produk;
use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
    	$transaksi = \App\Transaksi::all();
    	return view('transaksi.index',compact('transaksi'), compact('data_produk'));
    }

    public function tambah()
    {
    	$data_produk = \App\Produk::all();
    	return view('transaksi.tambah', compact('data_produk'));
    }
}
