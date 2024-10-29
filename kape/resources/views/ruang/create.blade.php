@extends('layouts.main')

@section('content')
<h2>Tambah Ruang</h2>
<form action="{{route('ruang.store')}}" method="post">
    @csrf
    Nama Ruang <br>
    <input type="text" class="form-control" name="kode_ruang"> <br>
    
    <button class="btn btn-primary">Simpan</button>

</form>
@endsection