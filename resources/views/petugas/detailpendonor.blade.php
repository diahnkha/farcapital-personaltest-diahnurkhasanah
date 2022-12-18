@extends('templates.base')

@section('title', 'Edit Data')
@section('content')

    <h1><label for="nama" >Nama :</label></h1>
    <h3>{{ $pendonor->nama }}</h3>

    <h1><label for="email" >email :</label></h1>
    <h3>{{ $pendonor->email }}</h3>

    <h1><label for="jenis_kelamin" >jenis_kelamin :</label></h1>
    <h3>{{ $pendonor->jenis_kelamin }}</h3>

    <h1><label for="tanggal_lahir" >tanggal_lahir :</label></h1>
    <h3>{{ $pendonor->tanggal_lahir }}</h3>

    <h1><label for="alamat" >alamat :</label></h1>
    <h3>{{ $pendonor->alamat }}</h3>

    <h1><label for="status_kelayakan" >status_kelayakan :</label></h1>
    <h3>{{ ($pendonor->status_kelayakan) ? "Layak":"Tidak Layak"; }}</h3>




    <a href="{{ route('pendonor.edit', ['pendonor' => $pendonor]) }}">Edit</a>
@endsection
