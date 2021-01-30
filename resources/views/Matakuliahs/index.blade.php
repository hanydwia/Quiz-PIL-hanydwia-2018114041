@extends('layouts.app')

@section('title','Matakuliahs')

@section('content')

<a href="/matakuliahs/create" class="card-link btn-primary">Tambah Matakuliah</a>


<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Nama Matakuliah</th>
      <th scope="col">SKS</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($matakuliahs as $matakuliah)
  <tr>
    <td>{{$matakuliah->nama_matakuliah}}</td>
    <td>{{$matakuliah->sks}}</td>
   
    <td><a href="/matakuliahs/{{$matakuliah->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/matakuliahs/{{ $matakuliah->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $matakuliahs -> links() }}
    </div>
@endsection





    
