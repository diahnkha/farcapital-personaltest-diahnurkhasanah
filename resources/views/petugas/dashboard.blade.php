@extends('templates.base')

@section('title', 'Dashboard Petugas')
@section('content')
    <h1>SELAMAT DATANG PETUGAS KESEHATAN</h1>

    <a href="{{ route('petugas.listpendonor') }}">Lihat list pendonor</a>


@endsection
