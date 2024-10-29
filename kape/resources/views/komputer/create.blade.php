@extends('layouts.main')

@section('content')
<h2>Tambah komputer</h2>
<form action="{{route('komputer.store')}}" method="post">
    @csrf
     kode komputer <br>
     @error('kode_komputer')
     {{ $message }}
     @enderror
    <input type="text" class="form-control" name="kode_komputer"> <br>

    Spesifikasi <br>
     @error('spesifikasi')
     {{ $message }}
     @enderror
    <input type="text" class="form-control" name="spesifikasi"> <br>

    Ruang<br>
     @error('ruang_id')
     {{ $message }}
     @enderror
     <select name="ruang_id"class="form-control">
        @foreach ($ruang as $item)
             <option value="{{ $item['id'] }}"
             
             > {{ $item['kode_ruang'] }}</option>
        @endforeach
     </select>

    
    <button class="btn btn-primary">Simpan</button>

</form>
@endsection