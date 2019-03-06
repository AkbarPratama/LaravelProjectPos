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
                                <button type="button" class="btn btn-flat btn-danger btn-xs mb-3" data-toggle="modal" data-target="#exampleModalLong">Input Data Baru</button>                                
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
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Ukuran</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Kategori</th>
                                                    <th scope="col">action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data_produk as $produk)
                                                <tr>
                                                    <th>{{$produk->nama_produk}}</th>
                                                    <td>{{$produk->ukuran}}</td>
                                                    <td>{{$produk->harga}}</td>
                                                    <td>{{$produk->kategori->nama_kategori}}</td>
                                                    <td>
                                                        <a href="/produk/{{$produk->id}}/edit" class="fa fa-edit"></a>
                                                        <a href="/produk/{{$produk->id}}/delete" class="ti-trash" onclick="return confirm('Yakin Mau Dihapus')"></a>
                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>
                                            
                                        </table>
                                        {{ $data_produk->links() }}
                                        
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


<div class="modal fade" id="exampleModalLong">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Data Produk</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                    <form action="/produk/create" method="POST"> 
                                    {{csrf_field()}}
                                    	<div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Nama Produk</label>
                                            <input name="nama_produk" class="form-control" type="text" placeholder="Masukkan Nama Produk" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Ukuran</label>
                                            <select name="ukuran" class="form-control">
                                                <option value="Small">Small</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Large">Large</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label">Harga</label>
                                            <input name="harga" class="form-control" type="text" placeholder="Masukkan Harga" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label class="col-form-label">Ukuran</label>
                                            <select name="kategori_id" class="form-control">
                                            @foreach($kategori as $category)
                                                <option value="{{$category->id}}">{{$category->nama_kategori}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                							<button type="submit" class="btn btn-secondabutton">Save</button>
            							</div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Textual inputs end -->            
            </div>
            
        </div>
    </div>
@endsection