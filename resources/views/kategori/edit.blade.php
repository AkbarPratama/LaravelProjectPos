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

                    <form action="/kategori/{{$kategori->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Nama Kategori</label>
                            <input name="nama_kategori" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input" value="{{$kategori->nama_kategori}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Merk</label>
                            <input name="merk" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input" value="{{$kategori->merk}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Detail</label>
                            <input name="detail" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="{{$kategori->detail}}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
@endsection