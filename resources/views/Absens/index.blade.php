@extends('layouts.app')

@section('title','Absens')

@section('content')

<a href="/absens/create" class="card-link btn-primary">Tambah Absen</a>


<table class="table table-success table-striped">
  <thead>
    <tr>
      <th scope="col">Waktu Absen</th>
      <th scope="col">Mahasiswa</th>
      <th scope="col">Matakuliah</th>
      <th scope="col">Keterangan</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($absens as $absen)
  <tr>
    <td>{{$absen->waktu_absen}}</td>
    <td>{{$absen->mahasiswa_id}}</td>
    <td>{{$absen->matakuliah_id}}</td>
    <td>{{$absen->keterangan}}</td>
    <td><a href="/absens/{{$absen->id}}/edit"><button type="button" class="btn btn-outline-secondary">Edit</a></button></td>
    <form action="/absens/{{ $absen->id}}" method="POST">
    @csrf
    @method('DELETE')
    <td><button class="btn btn-outline-secondary">Delete</button></td>
    </form>
    </tr>
    @endforeach
  </tbody>
</table>
<div>
    {{ $absens -> links() }}
    </div>
@endsection





    
