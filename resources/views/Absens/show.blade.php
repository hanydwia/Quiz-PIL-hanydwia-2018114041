@extends('layouts.app')

@section('title','Data Absens')

@section('content')
<div class="card">
<div class="cardbody">
<h3>nama_mahasiswa :{{ $student['waktu_absen'] }} </h3>
<h3>Alamat teman :{{ $student['mahasiswa_id'] }} </h3>
<h3>no_tlp:{{ $student['matakuliah_id'] }} </h3>
<h3>email :{{ $student['keterangan'] }} </h3>
 </div>
</div>
@endsection

    
