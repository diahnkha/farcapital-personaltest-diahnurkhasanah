@extends('templates.base')


@section('title', 'List Pendonor')

@section('content')

<a href="{{ route('pendonor.create') }}">Tambah Pendonor</a>


<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Password</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Status Kelayakan</th>
        </tr>
    </thead>

    {{-- TODO: loop all pendonor data --}}
    <tbody>
       @foreach($pendonors as $pendonor)
       <tr>
        <td>
            {{ $loop->iteration }}
        </td>
           <td>
               {{ $pendonor->nama }}
       </td>
       <td>
           {{ $pendonor->email }}
        </td>
        <td>
           {{ $pendonor->password }}
        </td>
        <td>
           {{ $pendonor->jenis_kelamin }}
        </td>
        <td>
            {{ $pendonor->tanggal_lahir }}
        </td>
        <td>
            {{ $pendonor->alamat }}
        </td>
        <td>
           {{ $pendonor->status_kelayakan }}
        </td>
        <td>
            <a href="{{ route('pendonor.edit', ['pendonor' => $pendonor]) }}">Edit</a>

            <a href="{{ route('pendonor.checkformcreate', ['pendonor' => $pendonor]) }}">Form</a>

            <form action="{{ route('pendonor.destroy', ['pendonor' => $pendonor]) }}" method="post">
            @csrf
            @method('delete')
            <button onclick="return confirm('Apakah anda yakin???')">delete</button>
            </form>
        </td>
    </tr>
       @endforeach
    </tbody>
</table>

{{-- table>thead>tr>th*6 --}}

@endsection
