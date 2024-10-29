

@extends('layouts.main')

@section('content')
<h2>Ruang</h2>
<a href="{{ route('ruang.create')}}"class="btn btn-primary"> Tambah</a>



<table class="table" id="datatablesSimple">
    <thead>
    <tr>
        <th>nama_ruang</th>
        <th>aksi</th>
    </tr>
    </thead>
    @foreach ($hasil as $row)
    <tr>  
        <td>
            {{ $row['kode_ruang'] }}
        </td>
        <td>
            <a href="{{ route('ruang.edit', $row['id']) }}" class=" btn btn-warning">Ubah</a>
            <form action="{{ route('ruang.destroy', $row['id']) }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </td>
        </tr>            
        @endforeach
    </table>
    @endsection

