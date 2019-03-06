@extends('layouts.master')

@section('content')
    <div class="main-content-inner">
    <h2>Edit Data Produk</h2>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
                <div class="row">
                    <div class="col-lg-10">

                    <form action="/produk/{{$produk->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Produk</label>
                            <input name="nama_produk" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input" value="{{$produk->nama_produk}}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ukuran</label>
                            <select name="ukuran" class="form-control">
                                <option value="Small" @if($produk->ukuran == 'Small') selected @endif>Small</option>
                                <option value="Medium" @if($produk->ukuran == 'Medium') selected @endif>Medium</option>
                                <option value="Large" @if($produk->ukuran == 'Large') selected @endif>Large</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Harga</label>
                            <input name="harga" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input" value="{{$produk->harga}}">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Ukuran</label>
                            <select name="kategori_id" class="form-control">
                                @foreach($kategori as $category)
                                <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Stok</label>
                            <input name="stok" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="{{$produk->stok}}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
@endsection