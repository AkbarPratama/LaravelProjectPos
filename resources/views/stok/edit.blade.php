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

                    <form action="/stok/{{$stok->id}}/update" method="POST">
                    {{csrf_field()}}
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Stok</label>
                            <input name="stok" class="form-control" type="text" placeholder="Masukkan Stok" id="example-text-input" value="{{$stok->stok}}">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Detail</label>
                            <input name="detail" class="form-control" type="text" placeholder="Masukkan Detail" id="example-text-input" value="{{$stok->detail}}">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-warning">Save</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
@endsection