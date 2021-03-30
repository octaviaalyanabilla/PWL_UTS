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
<input type="text"name="id_barang"class="form-control"id="Id Barang"value="{{$barang->id_barang}}"aria-describedby="Id Barang"></div>
<div class="form-group">
<label for="Kode Barang">Kode Barang</label>
<input type="text"name="kode_barang"class="form-control"id="Kode Barang"value="{{$barang->kode_barang}}"aria-describedby="Kode Barang">
</div>
<div class="form-group">
<labelfor="Nama Barang">Nama Barang</label>
<input type="Nama Barang"name="nama_barang"class="form-control"id="Nama Barang"value="{{$barang->nama_barang}}"aria-describedby="Nama Barang"></div>
<div class="form-group">
 <labelfor="Kategori Barang">Kategori Barang</label>
<input type="Kategori Barang"name="kategori_barang"class="form-control"id="Kategori Barang"value="{{$barang->kategori_barang}}"aria-describedby="Kategori Barang">
</div>
<div class="form-group">
 <label for="Harga">Harga</label>
<input type="Harga"name="harga"class="form-control"id="Harga"value="{{$barang->harga}}"aria-describedby="Harga">
</div>
<div class="form-group">
 <label for="Qty">Qty</label>
<input type="qty"name="qty"class="form-control"id="qty"value="{{$barang->qty}}"aria-describedby="Qty">
</div>

<button type="submit"class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@endsection