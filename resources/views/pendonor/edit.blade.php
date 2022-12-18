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
    <label for="alamat">update at :</label><br>
    <h3>{{ $pendonor->created_at }}</h3>
    <label>Kriteria Lolos Donor adalah sebagai berikut:</label><br/>
        <input type="checkbox" class="coba" name="kelayakan1[]" value="1"> Usia 17-60 tahun (usia 17 tahun diperbolehkan menjadi donor bila mendapat izin tertulis dari orangtua) <br/>
        <input type="checkbox" class="coba" name="kelayakan2[]" value="2"> Berat badan minimal 45 kg <br/>
        <input type="checkbox" class="coba" name="kelayakan3[]" value="3"> Temperatur tubuh 36,6 - 37,5 derajat Celcius <br/>
        <input type="checkbox" class="coba" name="kelayakan4[]" value="4"> Tekanan darah baik yaitu sistole = 110-160 mmHg, diastole = 70-100 mmHg - Denyut nadi teratur yaitu sekitar 50-100 kali/menit <br/>
        <input type="checkbox" class="coba" name="kelayakan5[]" value="5"> Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12.5 gram <br/>

    <br>
    <button type="submit">Update</button>

</form>
@endsection
