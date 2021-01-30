@extends('layouts.app')

@section('title','Data Matakuliahs')

@section('content')
<div class="card">
<div class="cardbody">
<h3>nama_matakuliah :{{ $matakuliah['nama_matakuliah'] }} </h3>
<h3>SKS :{{ $matakuliah['sks'] }} </h3>
 </div>
</div>
@endsection

    
