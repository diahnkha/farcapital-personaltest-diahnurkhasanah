@extends('templates.base')

@section('title', 'Edit Data')
@section('content')
<form action="{{ route('pendonor.store') }}" method="post">

    @csrf
    @method('put')

    <label for="nama" >Nama</label><br>
    <input type="text" name="nama" required value="{{ old('nama', $pendonor->nama) }}"><br>

    <label>Kriteria Lolos Donor adalah sebagai berikut:</label><br/>
        <input type="checkbox" name="kelayakan1[]" value="1"> Usia 17-60 tahun (usia 17 tahun diperbolehkan menjadi donor bila mendapat izin tertulis dari orangtua) <br/>
        <input type="checkbox" name="kelayakan2[]" value="2"> Berat badan minimal 45 kg <br/>
        <input type="checkbox" name="kelayakan3[]" value="3"> Temperatur tubuh 36,6 - 37,5 derajat Celcius <br/>
        <input type="checkbox" name="kelayakan4[]" value="4"> Tekanan darah baik yaitu sistole = 110-160 mmHg, diastole = 70-100 mmHg - Denyut nadi teratur yaitu sekitar 50-100 kali/menit <br/>
        <input type="checkbox" name="kelayakan5[]" value="5"> Hemoglobin perempuan minimal 12 gram, sedangkan untuk laki-laki minimal 12.5 gram <br/>



    <br>
    <button type="submit">Update</button>

</form>
@endsection
