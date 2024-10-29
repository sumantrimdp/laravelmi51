@extends('layouts.main')

@section('content')
<h2>Ubah Ruang</h2>
<form action="{{route('ruang.update', $hasil['id']) }}" method="post">
    @method('PUT')
    @csrf
    Nama Ruang <br>
    <input type="text" class="form-control" name="kode_ruang" value="{{ $hasil['kode_ruang'] }}"> <br>
    <button class="btn btn-primary">Simpan</button>

</form>
@endsection