@extends('layouts.main')

@section('content')
<h2>komputer</h2>
<a href="{{ route('komputer.create')}}"class="btn btn-primary"> Tambah</a>



<table class="table" id="datatablesSimple">
    <thead>
    <tr>
        <th>kode_komputer</th>
        <th>nama_ruang</th>
        <th>spesifikasi</th>
        <th>aksi</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($hasil as $row)
    <tr>  
        <td>
            {{ $row['kode_komputer'] }}
        </td>
        <td>
            {{ $row['ruang']['kode_ruang'] }}
        </td>
        <td>
            {{ $row['spesifikasi'] }}
        </td>
        <td>
            <a href="{{ route('komputer.edit', $row['id']) }}" class=" btn btn-warning">Ubah</a>
            <form action="{{ route('komputer.destroy', $row['id']) }}" method="post"style="display:inline">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Hapus</button>
            </form>
            </td>
        </tr>            
        @endforeach
        </tbody>
    </table>
    @endsection

