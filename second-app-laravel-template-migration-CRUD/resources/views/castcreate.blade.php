@extends('layout.master')

@section('judul')
MEMBUAT PEMAIN FILM BARU
@endsection
 
@section('content')

<form action="/cast" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Pemain</label>
        <input type="text" name="nama" class="form-control">
      </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="" name="jk" class="form-control">
      </div>
        @error('jk')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Watak Pemain</label>
        <input type="" name="wtk" class="form-control">
      </div>
        @error('wtk')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <button type="submit" class="btn btn-primary btn">Submit</button>
</form>
@endsection