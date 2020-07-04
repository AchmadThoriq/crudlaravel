@extends('master')

@section ('content')

<div class = "ml-3 mt-3">
    <h3> Detail Jawaban </h3>
    <p> Isi : {{ $jawab->isi}} </p>
    <p> Penanya : {{ $jawab->penanya_id}} </p>
    <p> Tanggal dibikin : {{ $jawab->tanggal_dibikin}} </p>
    <p> Tanggal diperbarui : {{ $jawab->tanggal_diperbarui}} </p>
    <a href = "/jawaban" class="btn btn-primary">Kembali</a>
</div>

@endsection