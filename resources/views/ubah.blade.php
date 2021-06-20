@extends('layouts.app')
@section('content')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h1>Edit Produk</h1>
            <form action="{{route('book.update', $dataUbah->id) }}" method="POST">
                @csrf
                @method('PUT')
                <ul class="list-group">
                    Kode Produk <input type="text" name="kodeProduk" value="{{$dataUbah->kode_produk}}" required>
                    Nama <input type="text" name="nama" value="{{$dataUbah->nama}}"" required>
                    Deskripsi <input type="text" name="desc" value="{{$dataUbah->deskripsi}}" required>
                </ul>
                <hr>
                <a href="{{route('book.index')}}" class="btn btn-primary">Kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection