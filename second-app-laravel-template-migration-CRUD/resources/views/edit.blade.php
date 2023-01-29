@extends('layout.master')

@section('judul')
EDIT PEMAIN FILM 
@endsection
 
@section('content')

<form action="/cast/{{$cast->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Pemain</label>
        <input type="text" name="nama" value="{{$cast->nama}}" class="form-control">
      </div>
        @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Jenis Kelamin</label>
        <input type="" name="jk" value="{{$cast->jeniskelamin}}" class="form-control">
      </div>
        @error('jk')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <div class="form-group">
        <label>Watak Pemain</label>
        <input type="" name="wtk" value="{{$cast->watak}}" class="form-control">
      </div>
        @error('wtk')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      <button type="submit" class="btn btn-primary btn">Submit</button>
</form>
@endsection