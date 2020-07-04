@extends('master')


@section('content')

<div class ="ml-3 mt-3"><table class="table">
    <thead class="thead-dark">
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Penanya_id</th>
        <th>Tanggal_dibuat</th>
        <th>Tanggal_diperbarui</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tanya as $key => $tanya)
      <tr>
          <td> {{$key + 1}}</td>
          <td> {{$tanya->judul}}</td>
          <td> {{$tanya->isi}}</td>
          <td> {{$tanya->penanya_id}}</td>
          <td> {{$tanya->tanggal_dibuat}}</td>
          <td> {{$tanya->tanggal_diperbarui}}</td>
          <td>
          <a href = "/pertanyaan/{{$tanya->id}}" class= "btn btn-sm btn-primary">show</a>
          <a href = "/pertanyaan/{{$tanya->id}}/edit" class= "btn btn-sm btn-info">edit</a>
          <form action ="/pertanyaan/{{$tanya->id}}" method = "post" style="display: inline">
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
          </form>
          </td>
      </tr>

      @endforeach
    </tbody>
  </table>
  <a href = "/pertanyaan/create" class = "btn btn-primary mb-2"> Buat Pertanyaan </a>
  </div>



@endsection