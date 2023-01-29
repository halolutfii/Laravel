@extends('layout.master')

@section('judul')
Show Data Pemain
@endsection
 
@section('content')

<h1>NAMA PEMAIN : {{$cast->nama}}</h1>
<p>JENIS KELAMIN PEMAIN : {{$cast->jeniskelamin}}</p>
<p>WATAK PEMAIN : {{$cast->watak}}</p>

<a href="/cast" class="btn btn-primary btn">Kembali</a>
@endsection