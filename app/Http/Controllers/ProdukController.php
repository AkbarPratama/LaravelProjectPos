<?php

namespace App\Http\Controllers;

use App\Stok;
use App\Produk;
use App\Kategori;
use Illuminate\Http\Request;


class ProdukController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_produk = \App\Produk::where('nama_produk','LIKE','%'.$request->cari.'%')->get();
    	}
    	else
    	{
    		$data_produk = \App\Produk::all();	
    	}
        $stok = \App\Stok::all();
        $kategori = \App\Kategori::all();
        $data_produk = \App\Produk::paginate(5);
    	return view('produk.index',compact('data_produk'),compact('kategori'),compact('stok'));

    }

   	public function create(Request $request)
    {
        \App\Produk::create($request->all());
        return redirect('/produk')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $kategori = \App\Kategori::all();
    	$produk = \App\Produk::find($id);
    	return view('produk.edit',['produk' => $produk,'kategori' => $kategori]);
    }

    public function update(Request $request,$id)
    {
    	$produk = \App\Produk::find($id);
    	$produk->update($request->all());
    	return redirect('/produk')->with('sukses','Data Behasil Diupdate');
    }

    public function delete($id)
    {
    	$produk = \App\Produk::find($id);
    	$produk->delete($produk);
    	return redirect('/produk')->with('sukses','Data Berhasil Dihapus');
    }
}
