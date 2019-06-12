@extends('Mobil.layout')

@section('title')
Tambah Data Mobil
@endsection

@section('content')
<a href="{{ url('Mobil') }}" class="btn btn-success btn-sm">
	Daftar Mobil
</a>
<form method="post" action="{{ url('Mobil') }}">
	{{ csrf_field() }}
	<div class="form-group">
		<label>No Plat</label>
		<input type="text" name="NoPlat" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Mobil</label>
		<input type="text" name="Nama" class="form-control">
	</div>
	<div class="form-group">
		<label>Warna</label>
		<input type="text" name="Warna" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Keluar</label>
		<input type="text" name="TglKeluar" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="Number" name="Harga" class="form-control">
	</div>
	<button type="submit" class="btn btn-success btn-block">
		Tambah Data
	</button>
</form>
@endsection