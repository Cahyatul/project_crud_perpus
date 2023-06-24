@extends('layout.master')

@section('content')
<div class="container">

<h1 class="text-center my-4"> Data Pengunjung Perpustakaan </h1>
<a class="btn btn-primary" href="/mahasiswa/create">Add Mahasiswa</a>
<table class="table table-success table-striped">
    <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis kelamin</th>
            <th>Alamat</th>
            <th>Aksi</th>
    </tr>
    @foreach($mahasiswa as $m)
    <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$m->nama}}</td>
            <td>{{$m->nim}}</td>
            <td>{{$m->jenis_kelamin}}</td>
            <td>{{$m->alamat}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
                <form action="/mahasiswa/{{$m->id}}" method="POST">
                    @csrf
                    @method('delete')
                <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>
                </div>
    </tr>
    @endforeach
</table>
<a href="http://127.0.0.1:8000/home" class="btn btn-secondary">Back</a>
</div>
@endsection