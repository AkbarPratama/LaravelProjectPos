<?php

namespace App\Http\Controllers;

use Stok;
use Produk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_stok = \App\Stok::where('stok','LIKE','%'.$request->cari.'%')->get();
    	}
    	else
    	{
    		$data_stok = \App\Stok::all();	
    	}
    	$data_stok = \App\Stok::paginate(5);
    	return view('stok.index',compact('data_stok'));
    }

    public function create(Request $request)
    {
    	\App\Stok::create($request->all());
    	return redirect('/stok')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
    	$stok = \App\Stok::find($id);
    	return view('stok.edit', compact('stok'));
    }

    public function update(Request $request,$id)
    {
    	$stok = \App\Stok::find($id);
    	$stok->update($request->all());
    	return redirect('/stok')->with('sukses','Data Behasil Diupdate');
    }

    public function delete($id)
    {
    	$stok = \App\Stok::find($id);
    	$stok->delete($stok);
    	return redirect('/stok')->with('sukses','Data Berhasil Dihapus');
    }
}
