@extends('layouts.main')

@section('content')



<table class="table">
    <tr>
        <th>Tanggal</th>.
        <th>User</th>
        <th>Komputer</th>
    </tr>
    @foreach ($hasil as $row)
    <tr>  
        <td>
            {{ $row['tanggal'] }}
        </td>
        <td>
            {{ $row['user'] }}
        </td>
        <td>
            
            </td>
        </tr>            
        @endforeach
    </table>
    @endsection

