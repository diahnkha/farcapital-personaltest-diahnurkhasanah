@extends('templates.base')

@section('title', 'Dashboard Petugas')
@section('content')
    <h1>SELAMAT DATANG</h1>

    <a href="{{ route('pendonor.create') }}">Registrasi Pendonor</a>

    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
      </div>
    @endif

@endsection
