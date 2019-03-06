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
						<form action="/transaksi/create" method="POST"> 
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="example-date-input" class="col-form-label">Tanggal</label>
                            <input name="tgl" class="form-control" type="date" id="example-date-input">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Barang</label>
                            <select name="kategori_id" class="form-control">
                            @foreach($data_produk as $p)
                                <option value="{{$p->id}}">{{$p->nama_produk}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Harga</label>
                            <input name="harga" class="form-control" type="text" id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Jumlah</label>
                            <input name="jumlah" class="form-control" type="text" placeholder="Masukkan jumlah" id="example-text-input">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Total</label>
                            <input name="total" class="form-control" type="text" id="example-text-input">
                        </div>                

                        <div class="modal-footer">
       						<button type="submit" class="btn btn-secondabutton">Save</button>
   						</div>
                    </form>
                </div>
            </div>
        </div>                   
@endsection