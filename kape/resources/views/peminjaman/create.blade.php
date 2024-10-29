@extends('layouts.main')

@section('content')
<h2>peminjaman</h2>
<form action="{{route('peminjaman.store')}}" method="post">
    @csrf
    Nama Ruang <br>
    <input type="text" class="form-control" name="peminjaman"> <br>
    
    <button class="btn btn-primary">Simpan</button>

</form>
@endsection