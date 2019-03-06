@extends('layouts.master')

@section('content')
	<div class="main-content-inner">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">
    		{{session('sukses')}}
		</div>
		@endif
                <div class="row">
                    <!-- table primary start -->
                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <div id="accordion1" class="according accordion-s2">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#accordion11">Data Produk</a>
                                        </div>
                                        <div id="accordion11" class="collapse show" data-parent="#accordion1">
                                        <div class="card-body">
                                <div class="col-lg-10 mt-5">
                                <!-- Button trigger modal -->
                                <a href="/transaksi/tambah" class="btn btn-flat btn-danger btn-xs mb-3">Input Transaksi Baru</a>
                                <form class="col-15 float-right" action="#">
                                <input type="text" name="cari" placeholder="Search..." required="">
                                <i class="ti-search"></i>
                                </form>
                                </div>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table text-center">
                                            <thead class="text-uppercase bg-primary">
                                                <tr class="text-white">
                                                    <th scope="col">ID Transaksi</th>
                                                    <th scope="col">Tanggal</th>
                                                    <th scope="col">Produk</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Jumlah</th>
                                                    <th scope="col">Total</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($transaksi as $t)
                                                <tr>
                                                    <th>{{$t->id}}</th>
                                                    <td>{{$t->tgl}}</td>
                                                    <td>{{$t->produk->nama_barang}}</td>
                                                    <td>{{$t->produk->harga}}</td>
                                                    <td>{{$t->jumlah}}</td>
                                                    <td>{{$t->total}}</td>
                                                    <td>
                                                        <a href="/transaksi/{{$t->id}}/detail" class="fa fa-edit">Detail</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection