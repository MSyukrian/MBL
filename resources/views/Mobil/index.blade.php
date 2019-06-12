@extends('Mobil.layout')

@section('title')
Mobil
@endsection

@section('content')
<a href="{{ url('Mobil/create') }}" class="btn btn-success btn-sm">
    Tambah Mobil
</a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>No Plat</th>
            <th>Nama</th>
            <th>Warna</th>
            <th>Tanggal Keluar</th>
            <th>Harga</th>
            <th>Tools</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $i => $value)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $value->NoPlat }}</td>
            <td>{{ $value->Nama }}</td>
            <td>{{ $value->Warna }}</td>
            <td>{{ $value->TglKeluar }}</td>
            <td>{{ $value->Harga }}</td>
            <td>
                <a href="{{ url('Mobil/'.$value->id.'/edit') }}" class="btn btn-warning btn-sm">Ubah</a> 

               <form action="{{ url ('Mobil/'.$value->id)}}" method="POST"> {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('yakin ingin menghapus?')">
                    HAPUS
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection