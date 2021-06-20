<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
@extends('template')

@section('content')
<div class="container" style="min-height: 500px">
    <div class="card my-3">
        <div class="card-body">
            <h3> Books Inventory</h3>
            <a href="{{route('book.create')}}"> Add Book </a>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Kode Produk</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{$product->kode_produk}}</td>
                    <td>{{$product->nama}}</td>
                    <td>{{$product->deskripsi}}</td>
                    <td>
                        <input type="button" value="edit" class="btn btn-warning">
                        <input type="button" value="hapus" class="btn btn-danger">
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
</html>

