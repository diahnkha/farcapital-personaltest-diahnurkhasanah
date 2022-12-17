@extends('templates.base')

@section('title', 'Edit Data')
@section('content')
<form action="{{ route('pendonor.update', ['pendonor' => $pendonor]) }}" method="post" enctype="multipart/form-data">

    @csrf
    @method('put')

    <label for="nama" >Nama</label><br>
    <input type="text" name="nama" required value="{{ old('nama', $pendonor->nama) }}"><br>
    <label for="email" >Email</label><br>
    <input type="email" name="email" required value="{{ old('email', $pendonor->email) }}"><br>
    <label for="password" >Password</label><br>
    <input type="password" name="password" required value="{{ old('password', $pendonor->password) }}"><br>
    <label for="jenis_kelamin">Jenis Kelamin :</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="1" {{ old('jenis_kelamin', $pendonor->jenis_kelamin) == 1 ? "selected" : ""}}>Perempuan</option>
            <option value="0" {{ old('jenis_kelamin', $pendonor->jenis_kelamin) == 0 ? "selected" : ""}}>Laki-laki</option>
        </select>
    <br>
    <label for="tanggal_lahir">Tanggal Lahir</label><br>
    <input type="text" name="tanggal_lahir" value="{{ old('tanggal_lahir', $pendonor->tanggal_lahir) }}"><br>
    <label for="alamat">alamat</label><br>
    <input type="text" name="alamat" value="{{ old('alamat', $pendonor->alamat) }}"><br>
    <label for="status_kelayakan">Status Kelayakan:</label><br>
        <select name="status_kelayakan" id="status_kelayakan">
            <option value="1" {{ old('status_kelayakan', $pendonor->status_kelayakan) == 1 ? "selected" : ""}}>Layak</option>
            <option value="0" {{ old('status_kelayakan', $pendonor->status_kelayakan) == 0 ? "selected" : ""}}>Tidak Layak</option>
        </select>
    <br>
    <button type="submit">Update</button>

</form>
@endsection
