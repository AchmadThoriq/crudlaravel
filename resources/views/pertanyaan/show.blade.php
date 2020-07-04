@extends('master')

@section ('content')

<div class = "ml-3 mt-3">
    <h3> Detail Pertanyaan</h3>
    <p> Judul : {{ $tanya->judul}} </p>
    <p> Isi : {{ $tanya->isi}} </p>
    <p> Penanya : {{ $tanya->penanya_id}} </p>
    <p> Tanggal dibuat : {{ $tanya->tanggal_dibuat}} </p>
    <p> Tanggal diperbarui : {{ $tanya->tanggal_diperbarui}} </p>
    <a href = "/pertanyaan" class="btn btn-primary">Kembali</a>
</div>

@endsection