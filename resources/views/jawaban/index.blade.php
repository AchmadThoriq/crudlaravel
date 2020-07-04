@extends('master')


@section('content')

<div class ="ml-3 mt-3">

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Isi</th>
        <th>Penanya_id</th>
        <th>Tanggal_dibikin</th>
        <th>Tanggal_diperbarui</th>
      </tr>
    </thead>
    <tbody>
      @foreach($jawab as $key => $jawab)
      <tr>
          <td> {{$key + 1}}</td>
          <td> {{$jawab->isi}}</td>
          <td> {{$jawab->penanya_id}}</td>
          <td> {{$jawab->tanggal_dibikin}}</td>
          <td> {{$jawab->tanggal_diperbarui}}</td>
          <td>
            <a href = "/jawaban/{{$jawab->penanya_id}}" class= "btn btn-sm btn-primary">show</a>
          </td>
      </tr>

      @endforeach
    </tbody>
  </table>
    <a href = "/jawaban/create" class = "btn btn-primary mb-2"> Buat Jawaban </a>
  </div>

@endsection