@extends('Mobil.layout')

@section('title')
Ubah Data Mobil
@endsection

@section('content')
<a href="{{ url('Mobil') }}" class="btn btn-success btn-sm">
	Daftar Mobil
</a>
<form method="post" action="{{ url('Mobil/'.$mbl->id) }}">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<div class="form-group">
		<label>No Plat</label>
		<input type="text" name="NoPlat" value="{{ $mbl->NoPlat}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Nama Mobil</label>
		<input type="text" name="Nama" value="{{ $mbl->Nama}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Warna</label>
		<input type="text" name="Warna" value = "{{ $mbl->Warna}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Tanggal Keluar</label>
		<input type="text" name="TglKeluar" value ="{{ $mbl->TglKeluar}}" class="form-control">
	</div>
	<div class="form-group">
		<label>Harga</label>
		<input type="number" value="{{$mbl->Harga}}" name="harga" class="form-control">
	</div>
	<button type="submit" class="btn btn-warning btn-block">
		Ubah Data
	</button>
</form>
@endsection