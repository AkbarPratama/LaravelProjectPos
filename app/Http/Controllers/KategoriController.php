<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_kategori = \App\Kategori::where('nama_kategori','LIKE','%'.$request->cari.'%')->get();
    	}
    	else
    	{
    		$data_kategori = \App\Kategori::all();	
    	}
        $data_kategori = \App\Kategori::paginate(5);  
    	return view('kategori.index', compact('data_kategori'));
    }

    public function create(Request $request)
    {
    	\App\Kategori::create($request->all());
        return redirect('/kategori')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
    	$kategori = \App\Kategori::find($id);
    	return view('kategori.edit',['kategori' => $kategori]);
    }

    public function update(Request $request,$id)
    {
    	$kategori = \App\Kategori::find($id);
    	$kategori->update($request->all());
    	return redirect('/kategori')->with('sukses','Data Behasil Diupdate');
    }

    public function delete($id)
    {
    	$kategori = \App\Kategori::find($id);
    	$kategori->delete($kategori);
    	return redirect('/kategori')->with('sukses','Data Berhasil Dihapus');
    }
}
