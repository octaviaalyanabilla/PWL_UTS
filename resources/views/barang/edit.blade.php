@extends('barang.layout')
@section('content')
<div class="containermt-5">
<div class="row justify-content-center align-items-center">
<div class="card"style="width:24rem;">
<div class="card-header">Edit barang</div>
<div class="card-body">
@if($errors->any())
<div class="alert alert-danger">
<strong>Whoops!
</strong>Thereweresomeproblemswithyourinput.<br><br>
<ul>@foreach($errors->all() as $error)
 <li>{{$error}}</li>
@endforeach
</ul></div>
@endif
<form method="post"action="{{route('barang.update',['barang'=>$barang->id_barang])}}"id="myForm">
@csrf
@method('PUT')
<div class="form-group">
 <label for="Id Barang">Id Barang</label>
<input type="id_barang"name="id_barang"class="form-control"id="id_barang"value="{{$barang->id_barang}}"aria-describedby="id_barang"></div>
<div class="form-group">
<label for="Kode Barang">Kode Barang</label>
<input type="kode_barang"name="kode_barang"class="form-control"id="kode_barang"value="{{$barang->kode_barang}}"aria-describedby="kode_barang">
</div>
<div class="form-group">
<labelfor="Nama Barang">Nama Barang</label>
<input type="nama_barang"name="nama_barang"class="form-control"id="nama_barang"value="{{$barang->nama_barang}}"aria-describedby="nama_barang"></div>
<div class="form-group">
 <labelfor="Kategori Barang">Kategori Barang</label>
<input type="kategori_barang"name="kategori_barang"class="form-control"id="kategori_barang"value="{{$barang->kategori_barang}}"aria-describedby="kategori_barang">
</div>
<div class="form-group">
 <label for="Harga">Harga</label>
<input type="harga"name="harga"class="form-control"id="harga"value="{{$barang->harga}}"aria-describedby="harga">
</div>
<div class="form-group">
 <label for="Qty">Qty</label>
<input type="qty"name="qty"class="form-control"id="qty"value="{{$barang->qty}}"aria-describedby="qty">
</div>

<button type="submit"class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection