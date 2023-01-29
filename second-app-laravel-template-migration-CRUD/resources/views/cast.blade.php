@extends('layout.master')

@section('judul')
DATA PEMAIN FILM
@endsection
 
@section('content')
 <a href="/castcreate" class="btn btn-primary btn">Tambah</a>
 <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $value)
        <tr> 
            <td>{{$key + 1}}</td>
            <td>{{$value->nama}}</td>
           <td> 
               <form action="/cast/{{$value->id}}" method="POST">
                @csrf
                @method('DELETE')
                <a href="/cast/{{$value->id}}" class="btn btn-info">Show</a>
                <a href="/cast/{{$value->id}}/edit" class="btn btn-primary">Edit</a>
                    <input type="submit" class="btn btn-danger my-1" value="Delete">
                </form>
            </td> 
        </tr>
    @empty
        <tr colspan="3">
            <td>Tidak Ada Data</td>
        </tr>  
    @endforelse              
    </tbody>
  </table>

@endsection