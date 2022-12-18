@extends('templates.base')


@section('title', 'List Pendonor')

@section('content')

<a href="{{ route('pendonor.create') }}">Tambah Pendonor</a>


<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Status</th>
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
           {{ $pendonor->status_kelayakan == 1 ? 'Layak' : 'Tidak Layak' }}

        </td>
        <td>
            @if($pendonor->status_kelayakan == 1)
            <a href="{{ route('petugas.detailpendonor', ['pendonor' => $pendonor]) }}">Detail</a>
            @endif
        </td>
    </tr>
       @endforeach
    </tbody>
</table>


@endsection
