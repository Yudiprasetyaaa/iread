<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add Books</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
@extends('template')

@section('content')
<div class="container my-3 w-50" style="min-height: 500px">
    <div class="card">
        <div class="card-body">
            <h3>Add Books</h3>
            <form action="{{route('book.store')}}" method="POST">
                @csrf
                <ul class="list-group">
                    Kode Produk <input type="text" name="KodeProduk" required>
                    Nama <input type="text" name="nama" required>
                    Deskripsi <input type="text" name="desc" required>
                </ul>
                <hr>
                <a href="{{route('book.index')}}">kembali</a>
                <input type="submit" value="Simpan" class="btn btn-success">
            </form>
        </div>
    </div>
</div>
@endsection
</html>