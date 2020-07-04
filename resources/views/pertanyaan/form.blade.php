@extends('master')


@section('content')

<div class= "ml-3 mt-3">
<form action="/pertanyaan"  method = "POST">
@csrf

<div class="form-group">
  <label for="judul">Judul :</label>
  <input type="text" class="form-control" id="judul" placeholder="Masukan Judul" name="judul" >
</div>

<div class="form-group">
  <label for="isi">Isi :</label>
  <input type="text" class="form-control" id="isi" placeholder="Masukan Isi" name="isi" >
</div>

<div class="form-group">
  <label for="penanya_id">Penanya_id :</label>
  <input type="number" class="form-control" id="penanya_id" placeholder="Masukan id penanya" name="penanya_id">
</div>

<div class="form-group">
  <label for="tanggal_dibuat">Tanggal dibuat:</label>
  <input type="text" class="form-control" id="tanggal_dibuat"  placeholder="Masukan tanggal" name="tanggal_dibuat" >
</div>

<div class="form-group">
  <label for="tanggal_diperbarui">Tanggal diperbarui:</label>
  <input type="text" class="form-control" id="tanggal_diperbarui"  placeholder="Masukan tanggal" name="tanggal_diperbarui" >
</div>
 
<button type="submit" class="btn btn-primary">Submit</button>
<a href = "/pertanyaan" class="btn btn-primary">Kembali</a>
</form>

</div>

@endsection